<?php

namespace App\Http\Controllers;
use App\Models\Data;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this -> Data = new Data();
    }

    public function admin_kumpulan()
    {
        $data = [
            'datas' => $this -> Data -> alldata(),
        ];
        return view('admin_kumpulan_arsip',$data);
    }

    public function admin_upload()
    {
        $data = [

        ];
        return view('admin_upload');
    }

    public function user_upload()
    {
        $data = [

        ];
        return view('user_upload');
    }

    public function user_kumpulan()
    {
        $data = [

        ];
        return view('kumpulan_arsip');
    }

    public function edit()
    {
        //$lkb = data::find();, compact('lkb')
        return view('edit');
    }
    
    public function add()
    {
        Request()->validate([
            'nama' => 'required|unique:posts|max:255',
            'unit' => 'required',
            'tanggal_Upload' => 'required',
            'pdfFile' => 'required|mimes:pdf|max:10000'
        ]);
    }
    



}
