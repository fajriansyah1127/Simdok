<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class asuransi_model extends Model
{
    
    public function allData()
    {
        return DB::table('asuransi')->get();
  
    }

    public function detailasuransi($id)
    {
        return DB::table('asuransi')->where('ID',$id)->first ();
    }

    public function addasuransi($data)
    {
        return DB::table('asuransi')->insert($data);
    }

    public function edit($id,$data)
    {
        DB::table('asuransi')->where('ID',$id)
        -> update($data);
    }

    public function hapus($id)
    {
        DB::table('asuransi')->where('ID',$id)
        -> delete();
    }
}
