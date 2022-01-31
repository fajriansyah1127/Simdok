<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengguna_model;

class user_controller extends Controller
{
    public function __construct()
    {
        $this-> model = new pengguna_model();
    }

    public function detail($id)
    {
        if (!$this->model->detailData($id)){
            abort(404);
        }
        $data = [
            'pengguna' => $this -> model -> detailData($id),
        ];
        return view('user.detail_admin&user',$data);
    }

    public function data()
    {
        $data = [
            'pengguna' => $this -> model -> alldata(),
        ];
        return view('user.admin&user',$data);
    }

    public function create()
    {
        // $data = [
        //     'datas' => $this -> Data -> alldata(),
        // ];
        return view('user.add_admin&user');
    }

    public function create_user()
    {
        Request()->validate([
            'Nama' => 'required',
            'Email' => 'required',
            'Jabatan' =>'required',
            'Kontak' =>'required',
            'Alamat' =>'required',
            'Foto'=>'required|mimes:jpg,jpeg,bmp,png|max:10000',

        ]);

        $file = Request()-> Foto;
        $filename = Request()-> Nama. '.' . $file->extension();
        $file->move(public_path('foto'),$filename);
        
        $data = [
            'Nama'=> Request()->Nama,
            'Email'=> Request()->Email,
            'Jabatan'=> Request()->Jabatan,
            'Kontak'=> Request ()->Kontak,
            'Alamat'=> Request()->Alamat,
            'Foto'=> $filename,
        ];
        
        $this->model->addUser($data);
        return redirect()->route('user')->with('pesan','Data Berhasil Di Tambahkan !!!');
    }

    public function edit($id)
    {
        if (!$this->model->detailData($id)){
            abort(404);
        }
        $data = [
            'pengguna' => $this -> model -> detailData($id),
        ];
        return view('user.edit_admin&user',$data);
    }

    public function update($id)
    {
        Request()->validate([
            'Nama' => 'required',
            'Email' => 'required',
            'Jabatan' =>'required',
            'Kontak' =>'required',
            'Alamat' =>'required',
            'Foto'=>'required|mimes:jpg,jpeg,bmp,png|max:10000',

        ]);

        $file = Request()-> Foto;
        $filename = Request()-> Nama. '.' . $file->extension();
        $file->move(public_path('foto'),$filename);
        
        $data = [
            'Nama'=> Request()->Nama,
            'Email'=> Request()->Email,
            'Jabatan'=> Request()->Jabatan,
            'Kontak'=> Request ()->Kontak,
            'Alamat'=> Request()->Alamat,
            'Foto'=> $filename,
        ];
        
        $this->model->edit($id,$data);
        return redirect()->route('user')->with('pesan','Data Berhasil Di Edit !!!');
    }

    public function delete($id)
    {
        $foto = $this->model->detailData($id);
        if ($foto->Foto <> "") {
            unlink(public_path('foto').'/'.$foto->Foto);
        }
        $this->model->hapus($id);
        return redirect()->route('user')->with('pesan','Data Berhasil Di Hapus !!!');
    }

}
