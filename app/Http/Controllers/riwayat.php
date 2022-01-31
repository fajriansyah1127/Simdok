<?php

namespace App\Http\Controllers;
use App\Models\riwayat_model;
use Illuminate\Http\Request;

class riwayat extends Controller
{
    public function __construct()
    {
        $this-> model = new riwayat_model();
    }

   public function riwayat()
    {
        $data = [
            'riwayat' => $this -> model -> riwayat(),
        ];
        return view('riwayat',$data);
    }
}
