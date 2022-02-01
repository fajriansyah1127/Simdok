<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dokumen;
use App\Models\asuransi;
use App\Models\Dokumen_model;
use App\Models\riwayat_model;
use RealRashid\SweetAlert\Facades\Alert;

class DokumenController extends Controller
{
    public function index()
    {
        $dokumen = dokumen::leftjoin('asuransi','asuransi.ID','=','dokumen.Id_asuransi')
        ->get();
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
            alert()->success('Success','JOSSS DATANYA SUDAH MASUK');
            return redirect()->back();
        }else{
            //redirect dengan pesan error
            alert()->error('Gagal', 'GAGAL BRO NDA BISA MASUK Di ulangi lagi');
            return redirect()->back();
        }
    }

    public function edit($data)
    {
        $asuransi = asuransi::get();
        $datas = dokumen::where('id',$data)->first ();
        return view('dokumen.edit', compact('datas','asuransi'));
    }

    public function update(Request $request, dokumen $datas)
    {
        $request->validate([
            'nama' => 'required',
            'unit' => 'required',
            'Nomor' =>'required',
            'tanggal_Upload' =>'required',
            'File'=>'required|mimes:jpg,pdf,bmp,png|max:10000',
        ]);

        $file = Request()-> File;
        $filename = Request()-> nama. date('dmy'). '.' . $file->extension();
        $file->move(public_path('file'),$filename); 

        $datas->update([
            'Nama'=> $request->nama,
            'Id_asuransi'=> $request->unit,
            'Nomor'=> $request->Nomor,
            'Tanggal'=> $request->tanggal_Upload,
            'File'=>$request-> $filename,
        ]);

        if($datas){
            //redirect dengan pesan sukses
            Alert::alert('Data Berhasil Diupdate', 'success');
            return redirect()->route('dokumen.index');
        }else{
            //redirect dengan pesan error
            Alert::error('Gagal', 'Data Gagal Ditambahkan');
            return redirect()->back();
        }
    }

}
