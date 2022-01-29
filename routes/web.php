<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dokumen_controller;
use App\Http\Controllers\Asuransi_controller;
use App\Http\Controllers\user_controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|dwadwdaw
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('tampilanuserex');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/home1', function () {
    return view('home1');
});
Route::get('/login', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contactex', function () {
    return view('contactex');
});
Route::get('/survey', function () {
    return view('survey');
});
Route::get('/survey2', function () {
    return view('survey2');
});
// Route::get('/admin&user', function () {
//     return view('/admin&user');
// });
// Route::get('/kumpulan_asuransi', function () {
//     return view('/kumpulan_asuransi');
// });
// Route::get('/create', function () {
//     return view('/add_admin&user');
// });

// Route::get('/asuransi', function () {
//     return view('/kumpulan_asuransi');
// });

// Route::get('/add_asuransi', function () {
//     return view('/add_asuransi');
// });

// Route::get('/detail_admin&user', function () {
//     return view('/detail_admin&user');
// });
// Route::get('/detail_asuransi', function () {
//     return view('/detail_asuransi');
// });
// Route::get('/dokumen', function () {
//     return view('/dokumen');
// });
Route::get('/admin_kumpulan_arsip',[HomeController::class,'admin_kumpulan']);
// Route::get('/upload',[HomeController::class,'admin_upload']);
Route::get('/kumpulan_arsip',[HomeController::class,'user_kumpulan']);
Route::get('/user_upload', [HomeController::class,'user_upload']);

//Route::get('/contact', function (){
 //   return view('contact');
//});
Route::get('/edit', [HomeController::class, 'edit']);
// ->name('user_edit_upload_laporan_kinerja')
Route::post('/admin_upload_file', [HomeController::class,'add']);

/////DOKUMEN///////
Route::get('/dokumen',[Dokumen_controller::class,'kumpulan_dokumen'])->name('edit');
Route::get('/upload',[Dokumen_controller::class,'upload'])->name('dokumen');
Route::post('/add_dokumen',[Dokumen_controller::class,'tambah_dokumen']);
// Route::get('/download/{id}',[Dokumen::class,'download']);
Route::get('/download/{id}',[Dokumen_controller::class,'download']);
Route::get('/edit_dokumen/{id}',[Dokumen_controller::class,'edit']); 
Route::post('/update/dokumen/{id}',[Dokumen_controller::class,'update']);
Route::get('/hapus/{id}',[Dokumen_controller::class,'delete']);
/////ASURANSI//////
Route::get('/asuransi',[Asuransi_controller::class,'tampilan_asuransi'])->name('asuransi');
Route::get('/add_asuransi',[Asuransi_controller::class,'tambah_asuransi']);
Route::post('/create_asuransi',[Asuransi_controller::class,'create']);
Route::get('/detail_asuransi/{id}',[Asuransi_controller::class,'detail_asuransi']); 
Route::get('/edit_asuransi/{id}',[Asuransi_controller::class,'edit']); 
Route::post('/update/asuransi{id}',[Asuransi_controller::class,'update']); 
Route::get('/delete/asuransi{id}',[Asuransi_controller::class,'delete']);
/////pengguna//////
Route::get('/admin&user',[user_controller::class,'data'])->name('user'); 
Route::get('/detail_admin&user/{id}',[user_controller::class,'detail']);
Route::get('/create',[user_controller::class,'create']); 
Route::post('/create/user',[user_controller::class,'create_user']); 
Route::get('/edit_admin&user/{id}',[user_controller::class,'edit']);
Route::post('/update/{id}',[user_controller::class,'update']); 
Route::get('/delete/{id}',[user_controller::class,'delete']);