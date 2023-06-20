<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RingkasanController;
use App\Http\Controllers\SpesifikasiController;
use App\Http\Controllers\PreviewController;
use App\Http\Controllers\FileDownloadController;
use App\Http\Controllers\ControllerMathematica;
use App\Http\Controllers\ControllerMinitab;
use App\Http\Controllers\ControllerLabview;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/backend', function () {
    return view('layouts.backend');
});


// Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/auth', [LoginController::class, 'index'])->name('auth');

// Route::get('/loginbaru', [LoginController::class, 'indexLogin'])->name('loginbaru');
// Route::post('/login/authenticate', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/microsoft', [UserController::class, 'indexMicsrosoft']);
Route::get('/mathematica', [UserController::class, 'indexMathematica']);
Route::get('/minitab', [UserController::class, 'indexMinitab']);
Route::get('/labview', [UserController::class, 'indexLabview']);
Route::get('/matlab', [UserController::class, 'indexMatlab']);
Route::get('/adobe', [UserController::class, 'indexAdobe']);
// Route::get('/downloadPanduan/{id}', [UserController::class, 'getDownloadPanduan']);


// auth: admin || user
Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('produk', UserController::class);
        Route::get('/downloadPanduan/{id}', [UserController::class, 'getDownloadPanduan']);
        Route::get('/downloadInstaller/{id}/{route}', [UserController::class, 'getDownloadInstaller']);

    });

    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('/admin', [AdminController::class, 'index']);

        //microsoft
        Route::get('/admin/microsoft/ringkasanMicrosoft', [RingkasanController::class, 'indexMicrosoft']);
        Route::get('/admin/microsoft/ringkasanMicrosoft/createMicrosoft', [RingkasanController::class, 'createMicrosoft']);
        Route::post('/admin/microsoft/ringkasanMicrosoft/storeMicrosoft', [RingkasanController::class, 'storeMicrosoft']);
        Route::get('/admin/microsoft/ringkasanMicrosoft/editMicrosoft/{id}', [RingkasanController::class, 'editMicrosoft']);
        Route::put('/admin/microsoft/ringkasanMicrosoft/updateMicrosoft/{id}', [RingkasanController::class, 'updateMicrosoft']);
        Route::delete('/admin/microsoft/ringkasanMicrosoft/destroyMicrosoft/{id}', [RingkasanController::class, 'destroyMicrosoft']);

        Route::get('/admin/microsoft/filedownloadMicrosoft', [FileDownloadController::class, 'indexMicrosoft']);
        Route::get('/admin/microsoft/filedownloadMicrosoft/createMicrosoftFI', [FileDownloadController::class, 'createMicrosoftFI']);
        Route::post('/admin/microsoft/filedownloadMicrosoft/storeMicrosoftFI', [FileDownloadController::class, 'storeMicrosoftFI']);
        Route::get('/admin/microsoft/filedownloadMicrosoft/editMicrosoftFI/{id}', [FileDownloadController::class, 'editMicrosoftFI']);
        Route::put('/admin/microsoft/filedownloadMicrosoft/updateMicrosoftFI/{id}', [FileDownloadController::class, 'updateMicrosoftFI']);
        Route::delete('/admin/microsoft/filedownloadMicrosoft/destroyMicrosoftFI/{id}', [FileDownloadController::class, 'destroyMicrosoftFI']);

        Route::get('/admin/microsoft/spesifikasiMicrosoft', [SpesifikasiController::class, 'indexMicrosoft']);
        Route::get('/admin/microsoft/spesifikasiMicrosoft/createMicrosoft', [SpesifikasiController::class, 'createMicrosoft']);
        Route::post('/admin/microsoft/spesifikasiMicrosoft/storeMicrosoft', [SpesifikasiController::class, 'storeMicrosoft']);
        Route::get('/admin/microsoft/spesifikasiMicrosoft/editMicrosoft/{id}', [SpesifikasiController::class, 'editMicrosoft']);
        Route::put('/admin/microsoft/spesifikasiMicrosoft/updateMicrosoft/{id}', [SpesifikasiController::class, 'updateMicrosoft']);
        Route::delete('/admin/microsoft/spesifikasiMicrosoft/destroyMicrosoft/{id}', [SpesifikasiController::class, 'destroyMicrosoft']);

        Route::get('/admin/microsoft/spesifikasiMicrosoft/createMicrosoftPS', [SpesifikasiController::class, 'createMicrosoftPS']);
        Route::post('/admin/microsoft/spesifikasiMicrosoft/storeMicrosoftPS', [SpesifikasiController::class, 'storeMicrosoftPS']);
        Route::get('/admin/microsoft/spesifikasiMicrosoft/editMicrosoftPS/{id}', [SpesifikasiController::class, 'editMicrosoftPS']);
        Route::put('/admin/microsoft/spesifikasiMicrosoft/updateMicrosoftPS/{id}', [SpesifikasiController::class, 'updateMicrosoftPS']);
        Route::delete('/admin/microsoft/spesifikasiMicrosoft/destroyMicrosoftPS/{id}', [SpesifikasiController::class, 'destroyMicrosoftPS']);

        Route::get('/admin/microsoft/previewMicrosoft', [PreviewController::class, 'indexMicrosoft']);
        Route::get('/admin/microsoft/previewMicrosoft/createMicrosoft', [PreviewController::class, 'createMicrosoft']);
        Route::post('/admin/microsoft/previewMicrosoft/storeMicrosoft', [PreviewController::class, 'storeMicrosoft']);
        Route::get('/admin/microsoft/previewMicrosoft/editMicrosoft/{id}', [PreviewController::class, 'editMicrosoft']);
        Route::put('/admin/microsoft/previewMicrosoft/updateMicrosoft/{id}', [PreviewController::class, 'updateMicrosoft']);
        Route::delete('/admin/microsoft/previewMicrosoft/destroyMicrosoft/{id}', [PreviewController::class, 'destroyMicrosoft']);

        //adobe
        Route::get('/admin/adobe/ringkasan', [RingkasanController::class, 'index']);
        Route::get('/admin/adobe/ringkasan/create', [RingkasanController::class, 'create']);
        Route::post('/admin/adobe/ringkasan/store', [RingkasanController::class, 'store']);
        Route::get('/admin/adobe/ringkasan/edit/{id}', [RingkasanController::class, 'edit']);
        Route::put('/admin/adobe/ringkasan/update/{id}', [RingkasanController::class, 'update']);
        Route::delete('/admin/adobe/ringkasan/destroy/{id}', [RingkasanController::class, 'destroy']);

        Route::get('/admin/adobe/spesifikasi', [SpesifikasiController::class, 'index']);
        Route::get('/admin/adobe/spesifikasi/create', [SpesifikasiController::class, 'create']);
        Route::post('/admin/adobe/spesifikasi/store', [SpesifikasiController::class, 'store']);
        Route::get('/admin/adobe/spesifikasi/edit/{id}', [SpesifikasiController::class, 'edit']);
        Route::put('/admin/adobe/spesifikasi/update/{id}', [SpesifikasiController::class, 'update']);
        Route::delete('/admin/adobe/spesifikasi/destroy/{id}', [SpesifikasiController::class, 'destroy']);

        Route::get('/admin/adobe/spesifikasi/createPS', [SpesifikasiController::class, 'createPS']);
        Route::post('/admin/adobe/spesifikasi/storePS', [SpesifikasiController::class, 'storePS']);
        Route::get('/admin/adobe/spesifikasi/editPS/{id}', [SpesifikasiController::class, 'editPS']);
        Route::put('/admin/adobe/spesifikasi/updatePS/{id}', [SpesifikasiController::class, 'updatePS']);
        Route::delete('/admin/adobe/spesifikasi/destroyPS/{id}', [SpesifikasiController::class, 'destroyPS']);

        Route::get('/admin/adobe/preview', [PreviewController::class, 'index']);
        Route::get('/admin/adobe/preview/create', [PreviewController::class, 'create']);
        Route::post('/admin/adobe/preview/store', [PreviewController::class, 'store']);
        Route::get('/admin/adobe/preview/edit/{id}', [PreviewController::class, 'edit']);
        Route::put('/admin/adobe/preview/update/{id}', [PreviewController::class, 'update']);
        Route::delete('/admin/adobe/preview/destroy/{id}', [PreviewController::class, 'destroy']);



        //matlab
        Route::get('/admin/matlab/ringkasanMatlab', [RingkasanController::class, 'indexMatlab']);
        Route::get('/admin/matlab/ringkasanMatlab/createMatlab', [RingkasanController::class, 'createMatlab']);
        Route::post('/admin/matlab/ringkasanMatlab/storeMatlab', [RingkasanController::class, 'storeMatlab']);
        Route::get('/admin/matlab/ringkasanMatlab/editMatlab/{id}', [RingkasanController::class, 'editMatlab']);
        Route::put('/admin/matlab/ringkasanMatlab/updateMatlab/{id}', [RingkasanController::class, 'updateMatlab']);
        Route::delete('/admin/matlab/ringkasanMatlab/destroyMatlab/{id}', [RingkasanController::class, 'destroyMatlab']);

        Route::get('/admin/matlab/filedownloadMatlab', [FileDownloadController::class, 'indexMatlab']);
        Route::get('/admin/matlab/filedownloadMatlab/createMatlab', [FileDownloadController::class, 'createMatlab']);
        Route::post('/admin/matlab/filedownloadMatlab/storeMatlab', [FileDownloadController::class, 'storeMatlab']);
        Route::get('/admin/matlab/filedownloadMatlab/editMatlab/{id}', [FileDownloadController::class, 'editMatlab']);
        Route::put('/admin/matlab/filedownloadMatlab/updateMatlab/{id}', [FileDownloadController::class, 'updateMatlab']);
        Route::delete('/admin/matlab/filedownloadMatlab/destroyMatlab/{id}', [FileDownloadController::class, 'destroyMatlab']);

        Route::get('/admin/matlab/spesifikasiMatlab', [SpesifikasiController::class, 'indexMatlab']);
        Route::get('/admin/matlab/spesifikasiMatlab/createMatlab', [SpesifikasiController::class, 'createMatlab']);
        Route::post('/admin/matlab/spesifikasiMatlab/storeMatlab', [SpesifikasiController::class, 'storeMatlab']);
        Route::get('/admin/matlab/spesifikasiMatlab/editMatlab/{id}', [SpesifikasiController::class, 'editMatlab']);
        Route::put('/admin/matlab/spesifikasiMatlab/updateMatlab/{id}', [SpesifikasiController::class, 'updateMatlab']);
        Route::delete('/admin/matlab/spesifikasiMatlab/destroyMatlab/{id}', [SpesifikasiController::class, 'destroyMatlab']);

        Route::get('/admin/matlab/spesifikasiMatlab/createMatlabPS', [SpesifikasiController::class, 'createMatlabPS']);
        Route::post('/admin/matlab/spesifikasiMatlab/storeMatlabPS', [SpesifikasiController::class, 'storeMatlabPS']);
        Route::get('/admin/matlab/spesifikasiMatlab/editMatlabPS/{id}', [SpesifikasiController::class, 'editMatlabPS']);
        Route::put('/admin/matlab/spesifikasiMatlab/updateMatlabPS/{id}', [SpesifikasiController::class, 'updateMatlabPS']);
        Route::delete('/admin/matlab/spesifikasiMatlab/destroyMatlabPS/{id}', [SpesifikasiController::class, 'destroyMatlabPS']);

        Route::get('/admin/matlab/previewMatlab', [PreviewController::class, 'indexMatlab']);
        Route::get('/admin/matlab/previewMatlab/createMatlab', [PreviewController::class, 'createMatlab']);
        Route::post('/admin/matlab/previewMatlab/storeMatlab', [PreviewController::class, 'storeMatlab']);
        Route::get('/admin/matlab/previewMatlab/editMatlab/{id}', [PreviewController::class, 'editMatlab']);
        Route::put('/admin/matlab/previewMatlab/updateMatlab/{id}', [PreviewController::class, 'updateMatlab']);
        Route::delete('/admin/matlab/previewMatlab/destroyMatlab/{id}', [PreviewController::class, 'destroyMatlab']);


        //mathematica
        Route::get('/admin/mathematica/ringkasanMathematica', [RingkasanController::class, 'indexMathematica']);
        Route::get('/admin/mathematica/ringkasanMathematica/createMathematica', [RingkasanController::class, 'createMathematica']);
        Route::post('/admin/mathematica/ringkasanMathematica/storeMathematica', [RingkasanController::class, 'storeMathematica']);
        Route::get('/admin/mathematica/ringkasanMathematica/editMathematica/{id}', [RingkasanController::class, 'editMathematica']);
        Route::put('/admin/mathematica/ringkasanMathematica/updateMathematica/{id}', [RingkasanController::class, 'updateMathematica']);
        Route::delete('/admin/mathematica/ringkasanMathematica/destroyMathematica/{id}', [RingkasanController::class, 'destroyMathematica']);

        Route::get('/admin/mathematica/filedownloadMathematica', [FileDownloadController::class, 'indexMathematica']);
        Route::get('/admin/mathematica/filedownloadMathematica/createMathematica', [FileDownloadController::class, 'createMathematica']);
        Route::post('/admin/mathematica/filedownloadMathematica/storeMathematica', [FileDownloadController::class, 'storeMathematica']);
        Route::get('/admin/mathematica/filedownloadMathematica/editMathematica/{id}', [FileDownloadController::class, 'editMathematica']);
        Route::put('/admin/mathematica/filedownloadMathematica/updateMathematica/{id}', [FileDownloadController::class, 'updateMathematica']);
        Route::delete('/admin/mathematica/filedownloadMathematica/destroyMathematica/{id}', [FileDownloadController::class, 'destroyMathematica']);

        Route::get('/admin/mathematica/filedownloadMathematica/createMathematicaFI', [FileDownloadController::class, 'createMathematicaFI']);
        Route::post('/admin/mathematica/filedownloadMathematica/storeMathematicaFI', [FileDownloadController::class, 'storeMathematicaFI']);
        Route::get('/admin/mathematica/filedownloadMathematica/editMathematicaFI/{id}', [FileDownloadController::class, 'editMathematicaFI']);
        Route::put('/admin/mathematica/filedownloadMathematica/updateMathematicaFI/{id}', [FileDownloadController::class, 'updateMathematicaFI']);
        Route::delete('/admin/mathematica/filedownloadMathematica/destroyMathematicaFI/{id}', [FileDownloadController::class, 'destroyMathematicaFI']);

        Route::get('/admin/mathematica/spesifikasiMathematica', [SpesifikasiController::class, 'indexMathematica']);
        Route::get('/admin/mathematica/spesifikasiMathematica/createMathematica', [SpesifikasiController::class, 'createMathematica']);
        Route::post('/admin/mathematica/spesifikasiMathematica/storeMathematica', [SpesifikasiController::class, 'storeMathematica']);
        Route::get('/admin/mathematica/spesifikasiMathematica/editMathematica/{id}', [SpesifikasiController::class, 'editMathematica']);
        Route::put('/admin/mathematica/spesifikasiMathematica/updateMathematica/{id}', [SpesifikasiController::class, 'updateMathematica']);
        Route::delete('/admin/mathematica/spesifikasiMathematica/destroyMathematica/{id}', [SpesifikasiController::class, 'destroyMathematica']);

        Route::get('/admin/mathematica/spesifikasiMathematica/createMathematicaPS', [SpesifikasiController::class, 'createMathematicaPS']);
        Route::post('/admin/mathematica/spesifikasiMathematica/storeMathematicaPS', [SpesifikasiController::class, 'storeMathematicaPS']);
        Route::get('/admin/mathematica/spesifikasiMathematica/editMathematicaPS/{id}', [SpesifikasiController::class, 'editMathematicaPS']);
        Route::put('/admin/mathematica/spesifikasiMathematica/updateMathematicaPS/{id}', [SpesifikasiController::class, 'updateMathematicaPS']);
        Route::delete('/admin/mathematica/spesifikasiMathematica/destroyMathematicaPS/{id}', [SpesifikasiController::class, 'destroyMathematicaPS']);

        Route::get('/admin/mathematica/previewMathematica', [PreviewController::class, 'indexMathematica']);
        Route::get('/admin/mathematica/previewMathematica/createMathematica', [PreviewController::class, 'createMathematica']);
        Route::post('/admin/mathematica/previewMathematica/storeMathematica', [PreviewController::class, 'storeMathematica']);
        Route::get('/admin/mathematica/previewMathematica/editMathematica/{id}', [PreviewController::class, 'editMathematica']);
        Route::put('/admin/mathematica/previewMathematica/updateMathematica/{id}', [PreviewController::class, 'updateMathematica']);
        Route::delete('/admin/mathematica/previewMathematica/destroyMathematica/{id}', [PreviewController::class, 'destroyMathematica']);


        //labview
        Route::get('/admin/labview/ringkasanLabview', [RingkasanController::class, 'indexLabview']);
        Route::get('/admin/labview/ringkasanLabview/createLabview', [RingkasanController::class, 'createLabview']);
        Route::post('/admin/labview/ringkasanLabview/storeLabview', [RingkasanController::class, 'storeLabview']);
        Route::get('/admin/labview/ringkasanLabview/{id}/editLabview', [RingkasanController::class, 'editLabview']);
        Route::put('/admin/labview/ringkasanLabview/{id}', [RingkasanController::class, 'updateLabview']);
        Route::delete('/admin/labview/ringkasanLabview/{id}', [RingkasanController::class, 'destroyLabview']);

        Route::get('/admin/labview/filedownloadLabview', [FileDownloadController::class, 'indexLabview']);
        Route::get('/admin/labview/filedownloadLabview/createLabview', [FileDownloadController::class, 'createLabview']);
        Route::post('/admin/labview/filedownloadLabview/storeLabview', [FileDownloadController::class, 'storeLabview']);
        Route::get('/admin/labview/filedownloadLabview/editLabview/{id}', [FileDownloadController::class, 'editLabview']);
        Route::put('/admin/labview/filedownloadLabview/updateLabview/{id}', [FileDownloadController::class, 'updateLabview']);
        Route::delete('/admin/labview/filedownloadLabview/destroyLabview/{id}', [FileDownloadController::class, 'destroyLabview']);

        Route::get('/admin/labview/filedownloadLabview/createLabviewFI', [FileDownloadController::class, 'createLabviewFI']);
        Route::post('/admin/labview/filedownloadLabview/storeLabviewFI', [FileDownloadController::class, 'storeLabviewFI']);
        Route::get('/admin/labview/filedownloadLabview/editLabviewFI/{id}', [FileDownloadController::class, 'editLabviewFI']);
        Route::put('/admin/labview/filedownloadLabview/updateLabviewFI/{id}', [FileDownloadController::class, 'updateLabviewFI']);
        Route::delete('/admin/labview/filedownloadLabview/destroyLabviewFI/{id}', [FileDownloadController::class, 'destroyLabviewFI']);

        Route::get('/admin/labview/spesifikasiLabview', [SpesifikasiController::class, 'indexLabview']);
        Route::get('/admin/labview/spesifikasiLabview/createLabview', [SpesifikasiController::class, 'createLabview']);
        Route::post('/admin/labview/spesifikasiLabview/storeLabview', [SpesifikasiController::class, 'storeLabview']);
        Route::get('/admin/labview/spesifikasiLabview/editLabview/{id}', [SpesifikasiController::class, 'editLabview']);
        Route::put('/admin/labview/spesifikasiLabview/updateLabview/{id}', [SpesifikasiController::class, 'updateLabview']);
        Route::delete('/admin/labview/spesifikasiLabview/destroyLabview/{id}', [SpesifikasiController::class, 'destroyLabview']);

        Route::get('/admin/labview/spesifikasiLabview/createLabviewPS', [SpesifikasiController::class, 'createLabviewPS']);
        Route::post('/admin/labview/spesifikasiLabview/storeLabviewPS', [SpesifikasiController::class, 'storeLabviewPS']);
        Route::get('/admin/labview/spesifikasiLabview/editLabviewPS/{id}', [SpesifikasiController::class, 'editLabviewPS']);
        Route::put('/admin/labview/spesifikasiLabview/updateLabviewPS/{id}', [SpesifikasiController::class, 'updateLabviewPS']);
        Route::delete('/admin/labview/spesifikasiLabview/destroyLabviewPS/{id}', [SpesifikasiController::class, 'destroyLabviewPS']);

        Route::get('/admin/labview/previewLabview', [PreviewController::class, 'indexLabview']);
        Route::get('/admin/labview/previewLabview/createLabview', [PreviewController::class, 'createLabview']);
        Route::post('/admin/labview/previewLabview/storeLabview', [PreviewController::class, 'storeLabview']);
        Route::get('/admin/labview/previewLabview/editLabview/{id}', [PreviewController::class, 'editLabview']);
        Route::put('/admin/labview/previewLabview/updateLabview/{id}', [PreviewController::class, 'updateLabview']);
        Route::delete('/admin/labview/previewLabview/destroyLabview/{id}', [PreviewController::class, 'destroyLabview']);


        //minitab
        Route::get('/admin/minitab/ringkasanMinitab', [RingkasanController::class, 'indexMinitab']);
        Route::get('/admin/minitab/ringkasanMinitab/createMinitab', [RingkasanController::class, 'createMinitab']);
        Route::post('/admin/minitab/ringkasanMinitab/storeMinitab', [RingkasanController::class, 'storeMinitab']);
        Route::get('/admin/minitab/ringkasanMinitab/editMinitab/{id}', [RingkasanController::class, 'editMinitab']);
        Route::put('/admin/minitab/ringkasanMinitab/updateMinitab/{id}', [RingkasanController::class, 'updateMinitab']);
        Route::delete('/admin/minitab/ringkasanMinitab/destroyMinitab/{id}', [RingkasanController::class, 'destroyMinitab']);

        Route::get('/admin/minitab/filedownloadMinitab', [FileDownloadController::class, 'indexMinitab']);
        Route::get('/admin/minitab/filedownloadMinitab/createMinitab', [FileDownloadController::class, 'createMinitab']);
        Route::post('/admin/minitab/filedownloadMinitab/storeMinitab', [FileDownloadController::class, 'storeMinitab']);
        Route::get('/admin/minitab/filedownloadMinitab/editMinitab/{id}', [FileDownloadController::class, 'editMinitab']);
        Route::put('/admin/minitab/filedownloadMinitab/updateMinitab/{id}', [FileDownloadController::class, 'updateMinitab']);
        Route::delete('/admin/minitab/filedownloadMinitab/destroyMinitab/{id}', [FileDownloadController::class, 'destroyMinitab']);

        Route::get('/admin/minitab/filedownloadMinitab/createMinitabFI', [FileDownloadController::class, 'createMinitabFI']);
        Route::post('/admin/minitab/filedownloadMinitab/storeMinitabFI', [FileDownloadController::class, 'storeMinitabFI']);
        Route::get('/admin/minitab/filedownloadMinitab/editMinitabFI/{id}', [FileDownloadController::class, 'editMinitabFI']);
        Route::put('/admin/minitab/filedownloadMinitab/updateMinitabFI/{id}', [FileDownloadController::class, 'updateMinitabFI']);
        Route::delete('/admin/minitab/filedownloadMinitab/destroyMinitabFI/{id}', [FileDownloadController::class, 'destroyMinitabFI']);


        Route::get('/admin/minitab/spesifikasiMinitab', [SpesifikasiController::class, 'indexMinitab']);
        Route::get('/admin/minitab/spesifikasiMinitab/createMinitab', [SpesifikasiController::class, 'createMinitab']);
        Route::post('/admin/minitab/spesifikasiMinitab/storeMinitab', [SpesifikasiController::class, 'storeMinitab']);
        Route::get('/admin/minitab/spesifikasiMinitab/editMinitab/{id}', [SpesifikasiController::class, 'editMinitab']);
        Route::put('/admin/minitab/spesifikasiMinitab/updateMinitab/{id}', [SpesifikasiController::class, 'updateMinitab']);
        Route::delete('/admin/minitab/spesifikasiMinitab/destroyMinitab/{id}', [SpesifikasiController::class, 'destroyMinitab']);

        Route::get('/admin/minitab/spesifikasiMinitab/createMinitabPS', [SpesifikasiController::class, 'createMinitabPS']);
        Route::post('/admin/minitab/spesifikasiMinitab/storeMinitabPS', [SpesifikasiController::class, 'storeMinitabPS']);
        Route::get('/admin/minitab/spesifikasiMinitab/editMinitabPS/{id}', [SpesifikasiController::class, 'editMinitabPS']);
        Route::put('/admin/minitab/spesifikasiMinitab/updateMinitabPS/{id}', [SpesifikasiController::class, 'updateMinitabPS']);
        Route::delete('/admin/minitab/spesifikasiMinitab/destroyMinitabPS/{id}', [SpesifikasiController::class, 'destroyMinitabPS']);

        Route::get('/admin/minitab/previewMinitab', [PreviewController::class, 'indexMinitab']);
        Route::get('/admin/minitab/previewMinitab/createMinitab', [PreviewController::class, 'createMinitab']);
        Route::post('/admin/minitab/previewMinitab/storeMinitab', [PreviewController::class, 'storeMinitab']);
        Route::get('/admin/minitab/previewMinitab/editMinitab/{id}', [PreviewController::class, 'editMinitab']);
        Route::put('/admin/minitab/previewMinitab/updateMinitab/{id}', [PreviewController::class, 'updateMinitab']);
        Route::delete('/admin/minitab/previewMinitab/destroyMinitab/{id}', [PreviewController::class, 'destroyMinitab']);




    });

    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('produk', UserController::class);
        Route::get('/downloadPanduan/{id}', [UserController::class, 'getDownloadPanduan']);
        Route::get('/downloadInstaller/{id}', [UserController::class, 'getDownloadInstaller']);
    });
});
