<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Fitur;
use App\Models\PersyaratanSistem;
use App\Models\Software;

class SpesifikasiController extends Controller
{
    public function index()
    {
        // $fitur = Fitur::all();
        $fitur = Fitur::where('id_software', '1')->get();
        $persyaratan_sistem = PersyaratanSistem::where('id_software', '1')->get();
        // dd($persyaratan_sistem);
        return view('admin.adobe.spesifikasi', compact(['fitur', 'persyaratan_sistem']));
        // return $fitur;
    }

    public function indexMicrosoft()
    {
        // $fitur = Fitur::all();
        $fitur = Fitur::where('id_software', '6')->get();
        $persyaratan_sistem = PersyaratanSistem::where('id_software', '6')->get();
        // dd($persyaratan_sistem);
        return view('admin.microsoft.spesifikasiMicrosoft', compact(['fitur', 'persyaratan_sistem']));
        // return $fitur;
    }

    public function indexMatlab()
    {
        // $fitur = Fitur::all();
        $fitur = Fitur::where('id_software', '2')->get();
        $persyaratan_sistem = PersyaratanSistem::where('id_software', '2')->get();
        // dd($persyaratan_sistem);
        return view('admin.matlab.spesifikasiMatlab', compact(['fitur', 'persyaratan_sistem']));
        // return $fitur;
    }

    public function indexMathematica()
    {
        // $fitur = Fitur::all();
        $fitur = Fitur::where('id_software', '3')->get();
        $persyaratan_sistem = PersyaratanSistem::where('id_software', '3')->get();
        // dd($persyaratan_sistem);
        return view('admin.mathematica.spesifikasiMathematica', compact(['fitur', 'persyaratan_sistem']));
        // return $fitur;
    }

    public function indexLabview()
    {
        // $fitur = Fitur::all();
        $fitur = Fitur::where('id_software', '4')->get();
        $persyaratan_sistem = PersyaratanSistem::where('id_software', '4')->get();
        // dd($persyaratan_sistem);
        return view('admin.labview.spesifikasiLabview', compact(['fitur', 'persyaratan_sistem']));
        // return $fitur;
    }

    public function indexMinitab()
    {
        // $fitur = Fitur::all();
        $fitur = Fitur::where('id_software', '5')->get();
        $persyaratan_sistem = PersyaratanSistem::where('id_software', '5')->get();
        // dd($persyaratan_sistem);
        return view('admin.minitab.spesifikasiMinitab', compact(['fitur', 'persyaratan_sistem']));
        // return $fitur;
    }

    public function create()
    {
        return view('admin.adobe.createFitur');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
        $software = Software::where('id', 1)->value('id');
        Fitur::create([
            'id_software' => $software,
            'fitur' =>$request->fitur
        ]);
        // Fitur::create($request->except(['_token','submit']));
        return redirect('/admin/adobe/spesifikasi');
    }

    public function createMicrosoft()
    {
        return view('admin.microsoft.createFiturMicrosoft');
    }

    public function storeMicrosoft(Request $request)
    {
        //dd($request->except(['_token','submit']));
        $software = Software::where('id', 6)->value('id');
        Fitur::create([
            'id_software' => $software,
            'fitur' =>$request->fitur
        ]);
        // Fitur::create($request->except(['_token','submit']));
        return redirect('/admin/microsoft/spesifikasiMicrosoft');
    }

    public function createMatlab()
    {
        return view('admin.matlab.createFiturMatlab');
    }

    public function storeMatlab(Request $request)
    {
        //dd($request->except(['_token','submit']));
        $software = Software::where('id', 2)->value('id');
        Fitur::create([
            'id_software' => $software,
            'fitur' =>$request->fitur
        ]);
        // Fitur::create($request->except(['_token','submit']));
        return redirect('/admin/matlab/spesifikasiMatlab');
    }

    public function createMathematica()
    {
        return view('admin.mathematica.createFiturMathematica');
    }

    public function storeMathematica(Request $request)
    {
        //dd($request->except(['_token','submit']));
        $software = Software::where('id', 3)->value('id');
        Fitur::create([
            'id_software' => $software,
            'fitur' =>$request->fitur
        ]);
        // Fitur::create($request->except(['_token','submit']));
        return redirect('/admin/mathematica/spesifikasiMathematica');
    }

    public function createLabview()
    {
        return view('admin.labview.createFiturLabview');
    }

    public function storeLabview(Request $request)
    {
        //dd($request->except(['_token','submit']));
        $software = Software::where('id', 4)->value('id');
        Fitur::create([
            'id_software' => $software,
            'fitur' =>$request->fitur
        ]);
        // Fitur::create($request->except(['_token','submit']));
        return redirect('/admin/labview/spesifikasiLabview');
    }

    public function createMinitab()
    {
        return view('admin.minitab.createFiturMinitab');
    }

    public function storeMinitab(Request $request)
    {
        //dd($request->except(['_token','submit']));
        $software = Software::where('id', 5)->value('id');
        Fitur::create([
            'id_software' => $software,
            'fitur' =>$request->fitur
        ]);
        // Fitur::create($request->except(['_token','submit']));
        return redirect('/admin/minitab/spesifikasiMinitab');
    }

    public function edit($id)
    {
        //dd($id);
        $fitur = Fitur::find($id);
        //dd($fitur);
        return view('admin.adobe.editFitur', compact(['fitur']));
    }

    public function update($id, Request $request)
    {
        $software = Software::where('id', 1)->value('id');
        Fitur::where('id', $id)
        ->update([
            'id_software' => $software,
            'fitur' =>$request->fitur
        ]);
        return redirect('/admin/adobe/spesifikasi');
    }

    public function editMicrosoft($id)
    {
        //dd($id);
        $fitur = Fitur::find($id);
        //dd($fitur);
        return view('admin.microsoft.editFiturMicrosoft', compact(['fitur']));
    }

    public function updateMicrosoft($id, Request $request)
    {
        $software = Software::where('id', 6)->value('id');
        Fitur::where('id', $id)
        ->update([
            'id_software' => $software,
            'fitur' =>$request->fitur
        ]);
        return redirect('/admin/microsoft/spesifikasiMicrosoft');
    }

    public function editMatlab($id)
    {
        //dd($id);
        $fitur = Fitur::find($id);
        // dd($fitur);
        return view('admin.matlab.editFiturMatlab', compact(['fitur']));
    }

    public function updateMatlab($id, Request $request)
    {
        $software = Software::where('id', 2)->value('id');
        Fitur::where('id', $id)
        ->update([
            'id_software' => $software,
            'fitur' =>$request->fitur
        ]);
        return redirect('/admin/matlab/spesifikasiMatlab');
    }

    public function editMathematica($id)
    {
        //dd($id);
        $fitur = Fitur::find($id);
        //dd($fitur);
        return view('admin.mathematica.editFiturMathematica', compact(['fitur']));
    }

    public function updateMathematica($id, Request $request)
    {
        $software = Software::where('id', 3)->value('id');
        Fitur::where('id', $id)
        ->update([
            'id_software' => $software,
            'fitur' =>$request->fitur
        ]);
        return redirect('/admin/mathematica/spesifikasiMathematica');
    }

    public function editLabview($id)
    {
        //dd($id);
        $fitur = Fitur::find($id);
        //dd($fitur);
        return view('admin.labview.editFiturLabview', compact(['fitur']));
    }

    public function updateLabview($id, Request $request)
    {
        $software = Software::where('id', 4)->value('id');
        Fitur::where('id', $id)
        ->update([
            'id_software' => $software,
            'fitur' =>$request->fitur
        ]);
        return redirect('/admin/labview/spesifikasiLabview');
    }

    public function editMinitab($id)
    {
        //dd($id);
        $fitur = Fitur::find($id);
        //dd($fitur);
        return view('admin.minitab.editFiturMinitab', compact(['fitur']));
    }

    public function updateMinitab($id, Request $request)
    {
        $software = Software::where('id', 5)->value('id');
        Fitur::where('id', $id)
        ->update([
            'id_software' => $software,
            'fitur' =>$request->fitur
        ]);
        return redirect('/admin/minitab/spesifikasiMinitab');
    }

    public function destroy($id)
    {
        $fitur = Fitur::find($id);
        $fitur->delete();
        return redirect('/admin/adobe/spesifikasi');
    }

    public function destroyMicrosoft($id)
    {
        $fitur = Fitur::find($id);
        $fitur->delete();
        return redirect('/admin/microsoft/spesifikasiMicrosoft');
    }

    public function destroyMatlab($id)
    {
        $fitur = Fitur::find($id);
        $fitur->delete();
        return redirect('/admin/matlab/spesifikasiMatlab');
    }

    public function destroyMathematica($id)
    {
        $fitur = Fitur::find($id);
        $fitur->delete();
        return redirect('/admin/mathematica/spesifikasiMathematica');
    }

    public function destroyLabview($id)
    {
        $fitur = Fitur::find($id);
        $fitur->delete();
        return redirect('/admin/labview/spesifikasiLabview');
    }

    public function destroyMinitab($id)
    {
        $fitur = Fitur::find($id);
        $fitur->delete();
        return redirect('/admin/minitab/spesifikasiMinitab');
    }

    public function createPS()
    {
        return view('admin.adobe.createPersyaratanSistem');
    }

    public function storePS(Request $request)
    {
        //dd($request->except(['_token','submit']));
        $software = Software::where('id', 1)->value('id');
        PersyaratanSistem::create([
            'id_software' => $software,
            'persyaratan_sistem' =>$request->persyaratan_sistem
        ]);
        // Fitur::create($request->except(['_token','submit']));
        return redirect('/admin/adobe/spesifikasi');
    }

    public function createMicrosoftPS()
    {
        return view('admin.microsoft.createPersyaratanSistemMicrosoft');
    }

    public function storeMicrosoftPS(Request $request)
    {
        //dd($request->except(['_token','submit']));
        $software = Software::where('id', 6)->value('id');
        PersyaratanSistem::create([
            'id_software' => $software,
            'persyaratan_sistem' =>$request->persyaratan_sistem
        ]);
        // Fitur::create($request->except(['_token','submit']));
        return redirect('/admin/microsoft/spesifikasiMicrosoft');
    }

    public function createMatlabPS()
    {
        return view('admin.matlab.createPersyaratanSistemMatlab');
    }

    public function storeMatlabPS(Request $request)
    {
        //dd($request->except(['_token','submit']));
        $software = Software::where('id', 2)->value('id');
        PersyaratanSistem::create([
            'id_software' => $software,
            'persyaratan_sistem' =>$request->persyaratan_sistem
        ]);
        // Fitur::create($request->except(['_token','submit']));
        return redirect('/admin/matlab/spesifikasiMatlab');
    }

    public function createMathematicaPS()
    {
        return view('admin.mathematica.createPersyaratanSistemMathematica');
    }

    public function storeMathematicaPS(Request $request)
    {
        //dd($request->except(['_token','submit']));
        $software = Software::where('id', 3)->value('id');
        PersyaratanSistem::create([
            'id_software' => $software,
            'persyaratan_sistem' =>$request->persyaratan_sistem
        ]);
        // Fitur::create($request->except(['_token','submit']));
        return redirect('/admin/mathematica/spesifikasiMathematica');
    }

    public function createLabviewPS()
    {
        return view('admin.labview.createPersyaratanSistemLabview');
    }

    public function storeLabviewPS(Request $request)
    {
        //dd($request->except(['_token','submit']));
        $software = Software::where('id', 4)->value('id');
        PersyaratanSistem::create([
            'id_software' => $software,
            'persyaratan_sistem' =>$request->persyaratan_sistem
        ]);
        // Fitur::create($request->except(['_token','submit']));
        return redirect('/admin/labview/spesifikasiLabview');
    }

    public function createMinitabPS()
    {
        return view('admin.minitab.createPersyaratanSistemMinitab');
    }

    public function storeMinitabPS(Request $request)
    {
        //dd($request->except(['_token','submit']));
        $software = Software::where('id', 5)->value('id');
        PersyaratanSistem::create([
            'id_software' => $software,
            'persyaratan_sistem' =>$request->persyaratan_sistem
        ]);
        // Fitur::create($request->except(['_token','submit']));
        return redirect('/admin/minitab/spesifikasiMinitab');
    }

    public function editPS($id)
    {
        //dd($id);
        $persyaratan_sistem = PersyaratanSistem::find($id);
        //dd($fitur);
        return view('admin.adobe.editPersyaratanSistem', compact(['persyaratan_sistem']));
    }

    public function updatePS($id, Request $request)
    {
        $software = Software::where('id', 1)->value('id');
        PersyaratanSistem::where('id', $id)
        ->update([
            'id_software' => $software,
            'persyaratan_sistem' =>$request->persyaratan_sistem
        ]);
        return redirect('/admin/adobe/spesifikasi');
    }

    public function editMicrosoftPS($id)
    {
        //dd($id);
        $persyaratan_sistem = PersyaratanSistem::find($id);
        //dd($fitur);
        return view('admin.microsoft.editPersyaratanSistemMicrosoft', compact(['persyaratan_sistem']));
    }

    public function updateMicrosoftPS($id, Request $request)
    {
        $software = Software::where('id', 6)->value('id');
        PersyaratanSistem::where('id', $id)
        ->update([
            'id_software' => $software,
            'persyaratan_sistem' =>$request->persyaratan_sistem
        ]);
        return redirect('/admin/microsoft/spesifikasiMicrosoft');
    }

    public function editMatlabPS($id)
    {
        //dd($id);
        $persyaratan_sistem = PersyaratanSistem::find($id);
        //dd($fitur);
        return view('admin.matlab.editPersyaratanSistemMatlab', compact(['persyaratan_sistem']));
    }

    public function updateMatlabPS($id, Request $request)
    {
        $software = Software::where('id', 2)->value('id');
        PersyaratanSistem::where('id', $id)
        ->update([
            'id_software' => $software,
            'persyaratan_sistem' =>$request->persyaratan_sistem
        ]);
        return redirect('/admin/matlab/spesifikasiMatlab');
    }

    public function editMathematicaPS($id)
    {
        //dd($id);
        $persyaratan_sistem = PersyaratanSistem::find($id);
        //dd($fitur);
        return view('admin.mathematica.editPersyaratanSistemMathematica', compact(['persyaratan_sistem']));
    }

    public function updateMathematicaPS($id, Request $request)
    {
        $software = Software::where('id', 3)->value('id');
        PersyaratanSistem::where('id', $id)
        ->update([
            'id_software' => $software,
            'persyaratan_sistem' =>$request->persyaratan_sistem
        ]);
        return redirect('/admin/mathematica/spesifikasiMathematica');
    }

    public function editLabviewPS($id)
    {
        //dd($id);
        $persyaratan_sistem = PersyaratanSistem::find($id);
        //dd($fitur);
        return view('admin.labview.editPersyaratanSistemLabview', compact(['persyaratan_sistem']));
    }

    public function updateLabviewPS($id, Request $request)
    {
        $software = Software::where('id', 4)->value('id');
        PersyaratanSistem::where('id', $id)
        ->update([
            'id_software' => $software,
            'persyaratan_sistem' =>$request->persyaratan_sistem
        ]);
        return redirect('/admin/labview/spesifikasiLabview');
    }

    public function editMinitabPS($id)
    {
        //dd($id);
        $persyaratan_sistem = PersyaratanSistem::find($id);
        //dd($fitur);
        return view('admin.minitab.editPersyaratanSistemMinitab', compact(['persyaratan_sistem']));
    }

    public function updateMinitabPS($id, Request $request)
    {
        $software = Software::where('id', 5)->value('id');
        PersyaratanSistem::where('id', $id)
        ->update([
            'id_software' => $software,
            'persyaratan_sistem' =>$request->persyaratan_sistem
        ]);
        return redirect('/admin/minitab/spesifikasiMinitab');
    }

    public function destroyPS($id)
    {
        $persyaratan_sistem = PersyaratanSistem::find($id);
        $persyaratan_sistem->delete();
        return redirect('/admin/adobe/spesifikasi');
    }

    public function destroyMicrosoftPS($id)
    {
        $persyaratan_sistem = PersyaratanSistem::find($id);
        $persyaratan_sistem->delete();
        return redirect('/admin/microsoft/spesifikasiMicrosoft');
    }

    public function destroyMatlabPS($id)
    {
        $persyaratan_sistem = PersyaratanSistem::find($id);
        $persyaratan_sistem->delete();
        return redirect('/admin/matlab/spesifikasiMatlab');
    }

    public function destroyMathematicaPS($id)
    {
        $persyaratan_sistem = PersyaratanSistem::find($id);
        $persyaratan_sistem->delete();
        return redirect('/admin/mathematica/spesifikasiMathematica');
    }

    public function destroyLabviewPS($id)
    {
        $persyaratan_sistem = PersyaratanSistem::find($id);
        $persyaratan_sistem->delete();
        return redirect('/admin/labview/spesifikasiLabview');
    }

    public function destroyMinitabPS($id)
    {
        $persyaratan_sistem = PersyaratanSistem::find($id);
        $persyaratan_sistem->delete();
        return redirect('/admin/minitab/spesifikasiMinitab');
    }
}
