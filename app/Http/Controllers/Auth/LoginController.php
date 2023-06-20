<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Auth\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Session\Middleware\AuthenticateSession;
use Session;
use Its\Sso\OpenIDConnectClient;
use Its\Sso\OpenIDConnectClientException;

use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::LOGIN;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        try{
            $provider = env('OIDC_PROVIDER_URL');
            $clientId = env('OIDC_CLIENT_ID');
            $clientSecret = env('OIDC_CLIENT_SECRET');
            $redirectUri = env('OPENID_REDIRECT_URI');
            $scope =  env('OPENID_SCOPE');

            $oidc = new OpenIDConnectClient($provider, $clientId, $clientSecret);
            $oidc -> setRedirectURL($redirectUri);
            $oidc->addScope($scope);

            if(in_array(strtolower(env('APP_ENV')), ['production', 'prod'])) {
                $oidc->setVerifyHost(false);
                $oidc->setVerifyPeer(false);
            }

            $oidc->authenticate();

            $userInfo = $oidc->requestUserInfo();
            $idToken = $oidc->getIdToken();

            $user = User::whereIn('email', [$userInfo->email, $userInfo->alternate_email])->first();

            if(!$user){
                $user = User::create([
                    'name' => $userInfo->name,
                    'email' => $userInfo->email ?? $userInfo->alternate_email,
                    'level' => 'user',
                ]);
            }

            Auth::login($user);
            Session::put('id_token', $idToken);

            if ($user->level == 'admin') {
                return redirect()->intended('admin');
            } elseif ($user->level == 'user') {
                return redirect()->intended('/');
            }

        }
        catch (OpenIDConnectClientException $e) {
            Auth::logout();
            Session::flush();
            Session::save();

            return redirect('error');
        }
        return redirect()->route('index');
    }

    public function logout(){
        try{
            $redirect = env('OPENID_POST_LOGOUT_REDIRECT_URI');
            if (Session::has('id_token')) {
                $accessToken = Session::get('id_token');
                Session::forget('id_token');
                Session::save();

               $provider = env('OIDC_PROVIDER_URL');
                $clientId = env('OIDC_CLIENT_ID');
                $clientSecret = env('OIDC_CLIENT_SECRET');

                $oidc = new OpenIDConnectClient($provider, $clientId, $clientSecret);

                $oidc->setVerifyHost(false);
                $oidc->setVerifyPeer(false);

                $oidc->signOut($accessToken, $redirect);
            }
            return redirect()->route('index');
        }
        catch (OpenIDConnectClientException $e) {
            echo $e->getMessage();
        }
    }
}
