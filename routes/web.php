<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SofaDBController;
use App\Http\Controllers\PageCounterController;

//import java.io ;

//System.out.println("Hello World") ;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('halo', function (){
//     return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
// });

// Route::get('blog', function (){
//     return view('blog');
// });

Route::get('/frontend', function () {
    return view('frontend');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/bootstrap1', function () {
    return view('bootstrap1');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/first', function () {
    return view('first');
});

Route::get('/frontend', function () {
    return view('frontend');
});

Route::get('/indexETS', function () {
    return view('indexETS');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/latihan-buat-ets', function () {
    return view('latihan buat ETS'); // Gunakan view('latihan_buat_ets') jika nama file pakai underscore
});

Route::get('/latihan_layout', function () {
    return view('latihan_layout');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/somethincOfficial', function () {
    return view('somethincOfficial');
});

Route::get('/template1', function () {
    return view('template1');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});

Route::get('/validasi1', function () {
    return view('validasi1');
});

Route::get('dosen',[DosenController::class,'index']);
Route::get('welcome',[DosenController::class,'welcome']);

//Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);
Route::get('/formulir', [PegawaiController::class,'formulir']);
Route::post('/formulir/proses', [PegawaiController::class,'proses']);

// route blog
Route::get('/blog', [BlogController::class,'home']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);

Route::get('template', function () {
	return view('template');
});

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//router SofaDB
Route::get('/sofa', [SofaDBController::class, 'index']);
Route::get('/sofa/tambah', [SofaDBController::class, 'tambah']);
Route::post('/sofa/store', [SofaDBController::class, 'store']);
Route::get('/sofa/edit/{id}', [SofaDBController::class, 'edit']);
Route::post('/sofa/update', [SofaDBController::class, 'update']);
Route::get('/sofa/hapus/{id}', [SofaDBController::class, 'hapus']);
Route::get('/sofa/cari', [SofaDBController::class, 'cari']);

//router LatihanEAS KodeA1
Route::get('/pagecounter', [PageCounterController::class, 'index']);
