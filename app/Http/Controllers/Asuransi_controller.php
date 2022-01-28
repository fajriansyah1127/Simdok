<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\asuransi_model;

class Asuransi_controller extends Controller
{
    public function __construct()
    {
        $this-> model = new asuransi_model();
    }
    
    public function tampilan_asuransi()
    {
        $data = [
            'asuransi' => $this -> model -> alldata(),
        ];
        return view('asuransi.kumpulan_asuransi',$data);
    }

    public function tambah_asuransi()
    {
        
        $data = [

        ];
        return view('asuransi.add_asuransi');
    }

    public function create()
    {
        Request()->validate([
            'Nama' => 'required',
            'Email' => 'required',
            'Kontak' =>'required',
            'Alamat' =>'required',
            'Status'=>'required',

        ]);
        $data = [
            'Nama_asuransi'=> Request()->Nama,
            'Email'=> Request()->Email,
            'Kontak'=> Request ()->Kontak,
            'Alamat'=> Request()->Alamat,
            'Status'=> Request()->Status,
        ];
        
        $this->model->addasuransi($data);
        return redirect()->route('asuransi')->with('pesan','Data Berhasil Di Tambahkan !!!');
    }
    

    public function detail_asuransi($id)
    {   if (!$this->model->detailasuransi($id)){
        abort(404);
    }
        $data = [
            'asuransi' => $this -> model -> detailasuransi($id),
        ];
        return view('asuransi.detail_asuransi',$data);
    }
    
    public function edit($id)
    {
        if (!$this->model->detailasuransi($id)){
            abort(404);
        }
        $data = [
            'asuransi' => $this -> model -> detailasuransi($id),
        ];
        return view('asuransi.edit_asuransi',$data);
    }

    public function update($id)
    {
        Request()->validate([
            'Nama' => 'required',
            'Email' => 'required',
            'Kontak' =>'required',
            'Alamat' =>'required',
            'Status'=>'required',

        ]);
        $data = [
            'Nama_asuransi'=> Request()->Nama,
            'Email'=> Request()->Email,
            'Kontak'=> Request ()->Kontak,
            'Alamat'=> Request()->Alamat,
            'Status'=> Request()->Status,
        ];
        
        $this->model->edit($id,$data);
        return redirect()->route('asuransi')->with('pesan','Data Berhasil Di Edit !!!');
    }

    public function delete($id)
    {
       
        $this->model->hapus($id);
        return redirect()->route('asuransi')->with('pesan','Data Berhasil Di Hapus !!!');
    }
}
