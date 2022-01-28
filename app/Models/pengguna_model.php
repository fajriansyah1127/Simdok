<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pengguna_model extends Model
{
    public function allData()
    {
        return DB::table('user')->get();
    //    return [
    //         [
    //             'Id' => '1234',
    //             'name' => 'Jokewadwr',
    //             'email' => 'penguasa@gmail.cpm',
    //             'Jabatan' => 'penguasa'
    //         ],
    //         [
    //             'Id' => '12342121',
    //             'name' => 'Jwwwwoker',
    //             'email' => 'penguadwdasa@gmail.cpm',
    //             'Jabatan' => 'penguaswdadawa'
    //         ]
    //         ];
    }
    
    public function detailData($id)
    {
        return DB::table('user')->where('ID',$id)->first ();
    }

    public function addUser($data)
    {
        return DB::table('user')->insert($data);
    }

    public function edit($id,$data)
    {
        DB::table('user')->where('ID',$id)
        -> update($data);
    }

    public function hapus($id)
    {
        DB::table('user')->where('ID',$id)
        -> delete();
    }
}

