<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dokumen_model extends Model
{

    public function id_asuransi()
    {
        return DB::table('asuransi')->get();
    }

    public function add_dokumen($data)
    {
        return DB::table('dokumen')->insert($data);
    }

    public function edit_dokumen($id)
    {
        return DB::table('dokumen')->where('id',$id)->first ();
    }

    public function riwayat($riwayat)
    {
        return DB::table('riwayat')->insert($riwayat);
    }

    public function edit($id,$data)
    {
        DB::table('dokumen')->where('id',$id)
        -> update($data);
    }

    public function dokumen()
    {
        return DB::table('dokumen')
        ->leftjoin('asuransi','asuransi.ID','=','dokumen.Id_asuransi')
        ->get();
    }

    public function hapus_file($id)
    {
        return DB::table('dokumen')->where('id',$id)->first ();
    }

    public function hapus($id)
    {
        DB::table('dokumen')->where('id',$id)->delete();

        // DB::table('users')->where('votes', '>', 100)->delete();
    }

    // public function download($id)
    // {
    //     if (Storage::disk('public')->exists("file/$id->file")){
    //         $path = Storage::disk('public')->path("file/$id->file");
    //         $content = file_get_contents($path);
    //         return response($content)->withHeaders([
    //             'Content-Type'=>mime_content_type($path)
    //         ]);
    //     }
    //     return redirect('/404');
    // }
}
