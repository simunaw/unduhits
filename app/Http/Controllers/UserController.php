<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Software;
use App\Models\Ringkasan;
use App\Models\Fitur;
use App\Models\PersyaratanSistem;
use App\Models\FilePanduan;
use App\Models\FileInstaller;
use App\Models\Preview;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Redirect;

use File;

class UserController extends Controller
{
    // public function index()
    // {
    //     return view('index1');
    // }

    public function indexMicsrosoft()
    {
    	$software = Software::where('id', '6')->get();
        $ringkasan = Ringkasan::where('id_software', '6')->get();
        $fitur = Fitur::where('id_software', '6')->get();
        $persyaratan_sistem = PersyaratanSistem::where('id_software', '6')->get();
        $file_panduan = FilePanduan::where('id_software', '6')->get();
        // dd($file_panduan);
        $file_installer = FileInstaller::where('id_software', '6')->get();
        $preview = Preview::where('id_software', '6')->get();

        return view('microsoft', compact(['ringkasan', 'software', 'fitur', 'persyaratan_sistem', 'file_panduan', 'file_installer', 'preview']));

    }

    public function indexAdobe()
    {
    	$software = Software::where('id', '1')->get();
        $ringkasan = Ringkasan::where('id_software', '1')->get();
        $fitur = Fitur::where('id_software', '1')->get();
        $persyaratan_sistem = PersyaratanSistem::where('id_software', '1')->get();
        $file_panduan = FilePanduan::where('id_software', '1')->get();
        // dd($file_panduan);
        $file_installer = FileInstaller::where('id_software', '1')->get();
        $preview = Preview::where('id_software', '1')->get();

        return view('adobe', compact(['ringkasan', 'software', 'fitur', 'persyaratan_sistem', 'file_panduan', 'file_installer', 'preview']));
    }

    public function indexMatlab()
    {
    	$software = Software::where('id', '2')->get();
        $ringkasan = Ringkasan::where('id_software', '2')->get();
        $fitur = Fitur::where('id_software', '2')->get();
        $persyaratan_sistem = PersyaratanSistem::where('id_software', '2')->get();
        $file_panduan = FilePanduan::where('id_software', '2')->get();
        // dd($file_panduan);
        $file_installer = FileInstaller::where('id_software', '2')->get();
        $preview = Preview::where('id_software', '2')->get();

        return view('matlab', compact(['ringkasan', 'software', 'fitur', 'persyaratan_sistem', 'file_panduan', 'file_installer', 'preview']));
    }

    public function indexMathematica()
    {
    	$software = Software::where('id', '3')->get();
        $ringkasan = Ringkasan::where('id_software', '3')->get();
        $fitur = Fitur::where('id_software', '3')->get();
        $persyaratan_sistem = PersyaratanSistem::where('id_software', '3')->get();
        $file_panduan = FilePanduan::where('id_software', '3')->get();
        // dd($file_panduan);
        $file_installer = FileInstaller::where('id_software', '3')->get();
        $preview = Preview::where('id_software', '3')->get();

        return view('mathematica', compact(['ringkasan', 'software', 'fitur', 'persyaratan_sistem', 'file_panduan', 'file_installer', 'preview']));
    }
    public function indexLabview()
    {
    	$software = Software::where('id', '4')->get();
        $ringkasan = Ringkasan::where('id_software', '4')->get();
        $fitur = Fitur::where('id_software', '4')->get();
        $persyaratan_sistem = PersyaratanSistem::where('id_software', '4')->get();
        $file_panduan = FilePanduan::where('id_software', '4')->get();
        $file_installer = FileInstaller::where('id_software', '4')->get();
        $preview = Preview::where('id_software', '4')->get();

        return view('labview', compact(['ringkasan', 'software', 'fitur', 'persyaratan_sistem', 'file_panduan', 'file_installer', 'preview']));
    }

    public function indexMinitab()
    {
    	$software = Software::where('id', '5')->get();
        $ringkasan = Ringkasan::where('id_software', '5')->get();
        $fitur = Fitur::where('id_software', '5')->get();
        $persyaratan_sistem = PersyaratanSistem::where('id_software', '5')->get();
        $file_panduan = FilePanduan::where('id_software', '5')->get();
        $file_installer = FileInstaller::where('id_software', '5')->get();
        $preview = Preview::where('id_software', '5')->get();

        return view('minitab', compact(['ringkasan', 'software', 'fitur', 'persyaratan_sistem', 'file_panduan', 'file_installer', 'preview']));
    }

    public function getDownloadPanduan($id)
    {
        $file_panduan = FilePanduan::find($id);
        $url=$file_panduan->namapanduan;

        return Redirect::away($url);
    }

    public function getDownloadInstaller($id)
    {
        $file_installer = FileInstaller::find($id);
        $url=$file_installer->file_download;
        return Redirect::away($url);
    }

}
