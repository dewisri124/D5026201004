@extends('layout.ceria')

@section('title', 'Data kursi')

@section('content')

<div class="container">
    <h3 class="text-center">Tambah Data kursi</h3>
    <br/>
	<a href="/kursi" class="btn btn-warning"> Kembali</a>
	<br/>
	<form action="/kursi/store" method="post" class="rounded">
		{{ csrf_field() }}
        <div class="row mt-3">
            <div class="col-4">Merkkursi</div>
            <div class="col-8">
                <input type="text" name="merkkursi" required="required"> <br/>
            </div>
        </div>
        <br>
        <div class="row mt-3">
            <div class="col-4">Stockkursi</div>
            <div class="col-8">
                <input type="number" name="stockkursi" required="required"> <br/>
            </div>
        </div>
        </div>
            <br>
        <div class="mt-3">
        <div class="col-sm-4"> Tersedia </div>
        <div class="col-8">
            <input type="radio" id="ada" name="tersedia" value="Y">
            <label for="ada">TERSEDIA</label><br>
            <input type="radio" id="tidak" name="tersedia" value="N" checked="checked">
            <label for="tidak">TIDAK TERSEDIA</label>
        </div>
        </div>
		<div class="d-grid gap-2 col-12 mx-auto mt-3">
            <center> <input type="submit" value="simpan data"> </center>
        </div>
	</form>
</div>

@endsection
