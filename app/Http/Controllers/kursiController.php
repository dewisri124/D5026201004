<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kursiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table kursi
        //$absen = DB::table('absen')->get();
        $kursi = DB::table('kursi')->paginate(8);

    	// mengirim data kursi ke view index
    	return view('kursi.index',['kursi' => $kursi]);

    }
    // method untuk menampilkan view form tambah kursi
    public function tambah()
    {
        // memanggil view tambah
        return view('kursi.tambah');
    }

    public function store(Request $request)
    {
	DB::table('kursi')->insert([
		'merkkursi' => $request->merkkursi,
		'stockkursi' => $request->stockkursi,
		'tersedia' => $request->tersedia,
	]);
	    return redirect('/kursi');
    }

    public function edit($id)
    {
        $kursi = DB::table('kursi')->where('kodekursi',$id)->get();

        return view('kursi.edit',['kursi' => $kursi]);
    }

    public function view($id)
    {
        $kursi = DB::table('kursi')->where('kodekursi',$id)->get();

        return view('kursi.detail',['kursi' => $kursi]);
    }

    public function update(Request $request)
    {
        DB::table('kursi')->where('kodekursi',$request->id)->update([
            'merkkursi' => $request->Merkkursi,
		    'stockkursi' => $request->stockkursi,
		    'tersedia' => $request->tersedia
        ]);
            return redirect('/kursi');
    }

    public function hapus($id)
    {
        // menghapus data kursi berdasarkan id yang dipilih
        DB::table('kursi')->where('kodekursi',$id)->delete();

        // alihkan halaman ke halaman kursi
        return redirect('/kursi');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$kursi = DB::table('kursi')
		->where('Merkkursi','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('kursi.index',['kursi' => $kursi]);

	}
}
