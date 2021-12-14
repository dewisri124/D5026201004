@extends('layout.ceria')

@section('title', 'Data kursi')

@section('content')

<div class="container">
	<h3 class="text-center">Detail kursi</h3>

	<a href="/kursi" class="btn btn-warning"> Kembali</a>

	<br/>
	<br/>

	@foreach($kursi as $mo)

        <div class="">
            <div class="col-3"> Kode kursi </div>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $mo->kodekursi }}
            </div>
        </div><br>
        <div class="mt-5">
            <div class="col-3"> Merk kursi </div>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $mo->merkkursi }}
            </div>
        </div><br>
        <div class="mt-5">
            <div class="col-3"> Stock kursi </div>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $mo->stockkursi }}
            </div>
        </div><br>
        <div class="mt-5">
            <div class="col-3"> Tersedia </div>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $mo->tersedia }}
            </div>
        </div><br/>
	@endforeach
</div>

@endsection
