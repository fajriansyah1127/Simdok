<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokumen extends Model
{
    protected $table = "Dokumen";

    protected $fillable = ["Nama", "Id_asuransi", "Nomor","Tanggal","File"];
}
