<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//Route untuk Data Buku
Route::get('/buku', 'BukuController@bukutampil');
Route::post('/buku/tambah', 'BukuController@bukutambah');
Route::get('/buku/hapus/{id_buku}', 'BukuController@bukuhapus');
Route::get('/buku/edit/{id_buku}', 'BukuController@bukuedit');

//Route untuk Data Buku
Route::get('/home', function(){return view('view_home');
});

//Route untuk Data Anggota
Route::get('/anggota', 'AnggotaController@anggotatampil');
Route::post('/anggota/tambah', 'AnggotaController@anggotatambah');
Route::get('/anggota/hapus/{id_anggota}', 'AnggotaController@anggotahapus');
Route::get('/anggota/edit/{id_anggota}', 'AnggotaController@anggotaedit');

//Route untuk Data petugas
Route::get('/petugas', 'PetugasController@petugastampil');
Route::post('/petugas/tambah', 'PetugasController@petugastambah');
Route::get('/petugas/hapus{id_petugas}', 'PetugasController@petugashapus');
Route::get('/petugas/edit{id_petugas}', 'PetugasController@petugasedit');

//Route untuk Data Peminjaman
Route::get('/pinjam', 'PinjamController@pinjamtampil');
Route::post('/peminjam/tambah', 'PeminjamController@peminjamtambah');
Route::get('/peminjam/hapus{id_peminjam}', 'PeminjamController@peminjamhapus');
Route::get('/peminjam/edit{id_peminjam|', 'PeminjamController@peminjamedit');