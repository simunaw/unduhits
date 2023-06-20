<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\FilePanduan;
use App\Models\FileInstaller;
use App\Models\Software;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FileDownloadController extends Controller
{
    public function index()
    {
        $file_panduan = FilePanduan::where('id_software', '1')->get();
        $file_installer = FileInstaller::where('id_software', '1')->get();
        return view('admin.adobe.filedownload', compact(['file_panduan', 'file_installer']));
    }

    public function indexMicrosoft()
    {
        $file_installer = FileInstaller::where('id_software', '6')->get();
        return view('admin.microsoft.filedownloadMicrosoft', compact(['file_installer']));
    }

    public function indexMatlab()
    {
        $file_panduan = FilePanduan::where('id_software', '2')->get();
        return view('admin.matlab.filedownloadMatlab', compact(['file_panduan']));
    }

    public function indexMathematica()
    {
        $file_panduan = FilePanduan::where('id_software', '3')->get();
        $file_installer = FileInstaller::where('id_software', '3')->get();
        return view('admin.mathematica.filedownloadMathematca', compact(['file_panduan', 'file_installer']));
    }

    public function indexLabview()
    {
        $file_panduan = FilePanduan::where('id_software', '4')->get();
        $file_installer = FileInstaller::where('id_software', '4')->get();
        return view('admin.labview.filedownloadLabview', compact(['file_panduan', 'file_installer']));
    }

    public function indexMinitab()
    {
        $file_panduan = FilePanduan::where('id_software', '5')->get();
        $file_installer = FileInstaller::where('id_software', '5')->get();
        return view('admin.minitab.filedownloadMinitab', compact(['file_panduan', 'file_installer']));
    }

    public function createMatlab()
    {
        return view('admin.matlab.createFilePanduanMatlab');
    }

    public function storeMatlab(Request $request)
    {
        $software = Software::where('id', 2)->value('id');
        FilePanduan::create([
            'id_software' => $software,
            'nama_file_panduan' =>$request->nama_file_panduan,
            'namaFIles' =>$request->namaFIles,
            'namapanduan' =>$request->namaFIles
        ]);
        return redirect('/admin/matlab/filedownloadMatlab');
    }

    public function createMathematica()
    {
        return view('admin.mathematica.createFilePanduanMathematica');
    }

    public function storeMathematica(Request $request)
    {
        $software = Software::where('id', 3)->value('id');
        FilePanduan::create([
            'id_software' => $software,
            'nama_file_panduan' =>$request->nama_file_panduan,
            'namaFIles' =>$request->namaFIles,
            'namapanduan' =>$request->namaFIles
        ]);
        return redirect('/admin/mathematica/filedownloadMathematica');
    }

    public function createLabview()
    {
        return view('admin.labview.createFilePanduanLabview');
    }

    public function storeLabview(Request $request)
    {
        $software = Software::where('id', 4)->value('id');
        FilePanduan::create([
            'id_software' => $software,
            'nama_file_panduan' =>$request->nama_file_panduan,
            'namaFIles' =>$request->namaFIles,
            'namapanduan' =>$request->namaFIles
        ]);
        return redirect('/admin/labview/filedownloadLabview');
    }

    public function createMinitab()
    {
        return view('admin.minitab.createFilePanduanMinitab');
    }

    public function storeMinitab(Request $request)
    {
        $software = Software::where('id', 5)->value('id');
        FilePanduan::create([
            'id_software' => $software,
            'nama_file_panduan' =>$request->nama_file_panduan,
            'namaFIles' =>$request->namaFIles,
            'namapanduan' =>$request->namaFIles
        ]);
        return redirect('/admin/minitab/filedownloadMinitab');
    }

    public function createMathematicaFI()
    {
        return view('admin.mathematica.createFileInstallerMathematica');
    }

    public function storeMathematicaFI(Request $request)
    {
        $software = Software::where('id', 3)->value('id');
        FileInstaller::create([
            'id_software' => $software,
            'nama_file_installer' =>$request->nama_file_installer,
            'size' =>$request->size,
            'file_download' =>$request->file_download
        ]);
        return redirect('/admin/mathematica/filedownloadMathematica');
    }

    public function createMicrosoftFI()
    {
        return view('admin.microsoft.createFileInstallerMicrosoft');
    }

    public function storeMicrosoftFI(Request $request)
    {
        // dd($request);
        $software = Software::where('id', 6)->value('id');
        FileInstaller::create([
            'id_software' => $software,
            'nama_file_installer' =>$request->nama_file_installer,
            'size' =>$request->size,
            'file_download' =>$request->file_download
        ]);
        return redirect('/admin/microsoft/filedownloadMicrosoft');
    }

    public function createLabviewFI()
    {
        return view('admin.labview.createFileInstallerLabview');
    }

    public function storeLabviewFI(Request $request)
    {
        $software = Software::where('id', 4)->value('id');
        FileInstaller::create([
            'id_software' => $software,
            'nama_file_installer' =>$request->nama_file_installer,
            'size' =>$request->size,
            'file_download' =>$request->file_download
        ]);
        return redirect('/admin/labview/filedownloadLabview');
    }

    public function createMinitabFI()
    {
        return view('admin.minitab.createFileInstallerMinitab');
    }

    public function storeMinitabFI(Request $request)
    {
        $software = Software::where('id', 5)->value('id');
        FileInstaller::create([
            'id_software' => $software,
            'nama_file_installer' =>$request->nama_file_installer,
            'size' =>$request->size,
            'file_download' =>$request->file_download
        ]);
        return redirect('/admin/minitab/filedownloadMinitab');
    }

    public function editMatlab($id)
    {
        $file_panduan = FilePanduan::find($id);
        return view('admin.matlab.editFilePanduanMatlab', compact(['file_panduan']));
    }

    public function updateMatlab($id, Request $request)
    {
        $file_panduan = Software::where('id', 2)->value('id');
        FilePanduan::where('id', $id)
        ->update([
            'nama_file_panduan' =>$request->nama_file_panduan,
            'namapanduan' =>$request->namapanduan,
            'namaFIles' =>$request->namapanduan
        ]);
        return redirect('/admin/matlab/filedownloadMatlab');
    }

    public function editMathematica($id)
    {
        //dd($id);
        $file_panduan = FilePanduan::find($id);
        //dd($fitur);
        return view('admin.mathematica.editFilePanduanMathematica', compact(['file_panduan']));
    }

    public function updateMathematica($id, Request $request)
    {
        $file_panduan = Software::where('id', 3)->value('id');
        FilePanduan::where('id', $id)
        ->update([
            'nama_file_panduan' =>$request->nama_file_panduan,
            'namapanduan' =>$request->namapanduan,
            'namaFIles' =>$request->namapanduan
        ]);
        return redirect('/admin/mathematica/filedownloadMathematica');
    }

    public function editLabview($id)
    {
        //dd($id);
        $file_panduan = FilePanduan::find($id);
        //dd($fitur);
        return view('admin.labview.editFilePanduanLabview', compact(['file_panduan']));
    }

    public function updateLabview($id, Request $request)
    {
        $file_panduan = Software::where('id', 4)->value('id');
        FilePanduan::where('id', $id)
        ->update([
            'nama_file_panduan' =>$request->nama_file_panduan,
            'namapanduan' =>$request->namapanduan,
            'namaFIles' =>$request->namapanduan
        ]);
        return redirect('/admin/labview/filedownloadLabview');
    }

    public function editMinitab($id)
    {
        //dd($id);
        $file_panduan = FilePanduan::find($id);
        //dd($fitur);
        return view('admin.minitab.editFilePanduanMinitab', compact(['file_panduan']));
    }

    public function updateMinitab($id, Request $request)
    {
        $file_panduan = Software::where('id', 5)->value('id');
        FilePanduan::where('id', $id)
        ->update([
            'nama_file_panduan' =>$request->nama_file_panduan,
            'namapanduan' =>$request->namapanduan,
            'namaFIles' =>$request->namapanduan
        ]);
        return redirect('/admin/minitab/filedownloadMinitab');
    }
    public function editMicrosoftFI($id)
    {
        $file_installer = FileInstaller::find($id);
        return view('admin.microsoft.editFileInstallerMicrosoft', compact(['file_installer']));
    }

    public function updateMicrosoftFI($id, Request $request)
    {
        $file_installer = Software::where('id', 6)->value('id');
        FileInstaller::where('id', $id)
        ->update([
            'nama_file_installer' =>$request->nama_file_installer,
            'file_download' =>$request->file_download,
            'size' => $request->size
        ]);
        return redirect('/admin/microsoft/filedownloadMicrosoft');
    }

    public function editMathematicaFI($id)
    {
        //dd($id);
        $file_installer = FileInstaller::find($id);
        //dd($fitur);
        return view('admin.mathematica.editFileInstallerMathematica', compact(['file_installer']));
    }

    public function updateMathematicaFI($id, Request $request)
    {
        $file_installer = Software::where('id', 3)->value('id');
        FileInstaller::where('id', $id)
        ->update([
            'nama_file_installer' =>$request->nama_file_installer,
            'file_download' =>$request->file_download,
            'size' => $request->size
        ]);
        return redirect('/admin/mathematica/filedownloadMathematica');
    }

    public function editLabviewFI($id)
    {
        //dd($id);
        $file_installer = FileInstaller::find($id);
        //dd($fitur);
        return view('admin.labview.editFileInstallerLabview', compact(['file_installer']));
    }

    public function updateLabviewFI($id, Request $request)
    {
        $file_installer = Software::where('id', 4)->value('id');
        FileInstaller::where('id', $id)
        ->update([
            'nama_file_installer' =>$request->nama_file_installer,
            'file_download' =>$request->file_download,
            'size' => $request->size
        ]);
        return redirect('/admin/labview/filedownloadLabview');
    }

    public function editMinitabFI($id)
    {
        //dd($id);
        $file_installer = FileInstaller::find($id);
        //dd($fitur);
        return view('admin.minitab.editFileInstallerMinitab', compact(['file_installer']));
    }

    public function updateMinitabFI($id, Request $request)
    {
        $file_installer = Software::where('id', 5)->value('id');
        FileInstaller::where('id', $id)
        ->update([
            'nama_file_installer' =>$request->nama_file_installer,
            'file_download' =>$request->file_download,
            'size' => $request->size
        ]);
        return redirect('/admin/minitab/filedownloadMinitab');
    }

    public function destroyMatlab($id)
    {
        $file_panduan = FilePanduan::find($id);
        $file_panduan->delete();
        return redirect('/admin/matlab/filedownloadMatlab');
    }

    public function destroyMathematica($id)
    {
        $file_panduan = FilePanduan::find($id);
        $file_panduan->delete();
        return redirect('/admin/mathematica/filedownloadMathematica');
    }

    public function destroyLabview($id)
    {
        $file_panduan = FilePanduan::find($id);
        $file_panduan->delete();
        return redirect('/admin/labview/filedownloadLabview');
    }

    public function destroyMinitab($id)
    {
        $file_panduan = FilePanduan::find($id);
        $file_panduan->delete();
        return redirect('/admin/minitab/filedownloadMinitab');
    }

    public function destroyMicrosoftFI($id)
    {
        $file_installer = FileInstaller::find($id);
        $file_installer->delete();
        return redirect('/admin/microsoft/filedownloadMicrosoft');
    }

    public function destroyMathematicaFI($id)
    {
        $file_installer = FileInstaller::find($id);
        $file_installer->delete();
        return redirect('/admin/mathematica/filedownloadMathematica');
    }

    public function destroyLabviewFI($id)
    {
        $file_installer = FileInstaller::find($id);
        $file_installer->delete();
        return redirect('/admin/labview/filedownloadLabview');
    }

    public function destroyMinitabFI($id)
    {
        $file_installer = FileInstaller::find($id);
        $file_installer->delete();
        return redirect('/admin/minitab/filedownloadMinitab');
    }
}
