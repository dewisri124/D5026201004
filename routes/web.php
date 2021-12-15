<?php

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
    return view('welcome');
});

Route::get('praktikum1', function () {
    return view('prak1web');
});
Route::get('tugas4', function () {
    return view('task4web');
});
Route::get('praktikum2', 'ViewController@showPraktikum2');
Route::get('ets', 'ViewController@showETS');
Route::get('showcalculator', 'ViewController@showCalForm');
Route::post('result', 'ViewController@showResultPHP');

//pegawai
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

//mutasi
Route::get('/mutasi','MutasiController@index');
Route::get('/mutasi/tambah','MutasiController@tambah');
Route::post('/mutasi/store','MutasiController@store');
Route::get('/mutasi/edit/{ID}','MutasiController@edit');
Route::post('/mutasi/update','MutasiController@update');
Route::get('/mutasi/hapus/{ID}','MutasiController@hapus');
Route::get('/mutasi/cari','MutasiController@cari');

//absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');

Route::get('home', function () {
    return view('layout.ceria');
});

Route::get('home', function () {
    return view('absen.index');
});

Route::get('home', function () {
    return view('mutasi.index');
});

Route::get('home', function () {
    return view('pegawai.index');
});

Route::get('home', function () {
    return view('kursi.index');
});

//kursi
Route::get('/kursi','kursiController@index');
Route::get('/kursi/tambah','kursiController@tambah');
Route::post('/kursi/store','kursiController@store');
Route::get('/kursi/edit/{id}','kursiController@edit');
Route::post('/kursi/update','kursiController@update');
Route::get('/kursi/hapus/{id}','kursiController@hapus');
Route::get('/kursi/cari','kursiController@cari');
Route::get('/kursi/detail/{id}','kursiController@view');


Route::get('home', function () {
    return view('karyawan1.index');
});

//karyawan1
Route::get('/karyawan1', 'karyawan1Controller@index');
Route::get('/karyawan1/tambah','karyawan1Controller@tambah');
Route::post('/karyawan1/store','karyawan1Controller@store');
Route::get('/karyawan1/edit/{id}','karyawan1Controller@edit');
Route::post('/karyawan1/update','karyawan1Controller@update');
Route::get('/karyawan1/hapus/{id}','karyawan1Controller@hapus');
Route::get('/karyawan1/cari','karyawan1Controller@cari');
Route::get('/karyawan1/detail/{id}','karyawan1Controller@view');

