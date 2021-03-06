<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class karyawan1Controller extends Controller
{
    public function index()
    {
    	// mengambil data dari table karyawan1
    	//$karyawan1 = DB::table('karyawan1')->get();
        $karyawan1 = DB::table('karyawan1')->paginate(5);

    	// mengirim data karyawan1 ke view index
    	return view('karyawan1.index',['karyawan1' => $karyawan1]);

    }

    // method untuk menampilkan view form tambah karyawan1
    public function tambah()
    {

	// memanggil view tambah
	return view('karyawan1.tambah');

    }

    // method untuk insert data ke table karyawan1
    public function store(Request $request)
    {

    //DB::table('')->insert() ;
	// insert data ke table karyawan1
	DB::table('karyawan1')->insert([
		'karyawan1_NIP' => $request->NIP,
		'karyawan1_nama' => $request->nama,
		'karyawan1_pangkat' => $request->pangkat,
		'karyawan1_gaji' => $request->gaji
	]);
	// alihkan halaman ke halaman karyawan1
	return redirect('/karyawan1');

    }

    // method untuk edit data karyawan1
    public function edit($id)
    {

	// mengambil data karyawan1 berdasarkan NIP yang dipilih
	$karyawan1 = DB::table('karyawan1')->where('karyawan1_NIP',$NIP)->get();
	// passing data karyawan1 yang didapat ke view edit.blade.php
	return view('karyawan1.edit',['karyawan1' => $karyawan1]);

    }

    // method untuk view detail data karyawan1
    public function view($NIP)
    {

	// mengambil data karyawan1 berdasarkan NIP yang dipilih
	$karyawan1 = DB::table('karyawan1')->where('karyawan1_NIP',$NIP)->get();
	// passing data karyawan1 yang didapat ke view edit.blade.php
	return view('karyawan1.detail',['karyawan1' => $karyawan1]);

    }

    // update data karyawan1
    public function update(Request $request)
    {
	// update data karyawan1
	DB::table('karyawan1')->where('karyawan1_NIP',$request->id)->update([
		'karyawan1_NIP' => $request->NIP,
		'karyawan1_nama' => $request->nama,
		'karyawan1_pangkat' => $request->pangkat,
		'karyawan1_gaji' => $request->gaji
	]);
	// alihkan halaman ke halaman karyawan1
	return redirect('/karyawan1');
    }

    // method untuk hapus data karyawan1
    public function hapus($NIP)
    {
	// menghapus data karyawan1 berdasarkan NIP yang dipilih
	DB::table('karyawan1')->where('karyawan1_NIP',$NIP)->delete();

	// alihkan halaman ke halaman karyawan1
	return redirect('/karyawan1');
    }


}

