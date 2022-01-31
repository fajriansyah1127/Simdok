<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dokumen;
use App\Models\asuransi;
class DokumenController extends Controller
{
    public function index()
    {
        $dokumen = dokumen::get();
        return view('dokumen.dokumen', compact('dokumen'));
    }

    public function create()
    {
        $asuransi = asuransi::get();
        return view('dokumen.upload_dokumen', compact('asuransi'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'nama' => 'required',
            'unit' => 'required',
            'Nomor' =>'required',
            'tanggal_Upload' =>'required',
            'File'=>'required|mimes:jpg,pdf,bmp,png|max:10000',

        ]);
        $file = Request()-> File;
        $filename = Request()-> nama. date('dmy'). '.' . $file->extension();
       $file->move(public_path('file'),$filename);

       $notif = dokumen::create([
            'Nama'=> $request->nama,
            'Id_asuransi'=> $request->unit,
            'Nomor'=> $request->Nomor,
            'Tanggal'=> $request->tanggal_Upload,
            'File'=> $filename,
        ]);

        if($notif){
            //redirect dengan pesan sukses
            return redirect()->route('dokumen')->with('pesan','Data Berhasil Di Tambahkan !!!');
        }else{
            //redirect dengan pesan error
            return redirect()->route('dokumen')->with('pesan','Data GAGAl Di Tambahkan !!!');
        }
    }



}
