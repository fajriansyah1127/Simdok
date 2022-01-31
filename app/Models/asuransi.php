<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asuransi extends Model
{
    protected $table = "asuransi";

    protected $fillable = ["Nama_asuransi", "Email", "Kontak","Alamat","Status"];
}
