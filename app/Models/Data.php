<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Data extends Model
{
    public function alldata()
    {
        
       //return 
    //    [
    //         [
    //             'id' => '1',
    //             'Tanggal upload' => 'Fajri',
    //             'Nama' => 'adadad',
    //             'Unit asuransi' => 'adadad',
    //             'Nama pengupload' => 'adadad',
    //         ],
    //         [
    //             'id' => '2',
    //             'Tanggal upload' => 'DINA',
    //             'Nama' => 'kemal',
    //             'Unit asuransi' => 'asdf',
    //             'Nama pengupload' => 'bababab',
    //         ]
            
    //     ];
        return DB::table('arsip') ->get();
    }

    // public function edit()
    // {
    //     // return DB::table('users') ->where ('id',$id) -> first();
    // }
}
