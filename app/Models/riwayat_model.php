<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class riwayat_model extends Model
{
    public function riwayat()
    {
        return DB::table('riwayat')->get();
    }
}
