@extends('layout.ceria')

@section('title', 'Datakaryawan1')

@section('content')

<div class="container">
	<h3 class="text-center">Detail karyawan1</h3>

	<a href="/karyawan1" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan1 as $p)

        <div class="">
            <div class="col-3"> NIP </div>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $p->karyawan1_NIP }}
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-3"> nama </div>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $p->karyawan1_nama }}
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-3"> pangkat </div>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $p->karyawan1_pangkat }}
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-3"> gaji </div>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $p->karyawan1_gaji }}
            </div>
        </div>
	@endforeach
</div>

@endsection
