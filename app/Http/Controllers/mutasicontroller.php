<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mutasicontroller extends Controller
{
    public function index()
    {
    	// mengambil data dari table mutasi
    	$mutasi = DB::table('mutasi')->get();

    	// mengirim data mutasi ke view index
    	return view('mutasi.index',['mutasi' => $mutasi]);

    }
    public function tambah()
    {

        // memanggil view tambah
        return view('mutasi.tambah');
    }

    public function store(Request $request)

    {
        DB::table('mutasi')->insert([
            'mutasi_ID' => $request->ID,
            'mutasi_IDPegawai' => $request->IDPegawai,
            'mutasi_Departemen' => $request->Departemen,
            'mutasi_SubDepartemen' => $request->SubDepartemen,
            'mutasi_MulaiBertugas' => $request->MulaiBertugas
        ]);
        // alihkan halaman ke halaman mutasi
        return redirect('/mutasi');
    }
}

