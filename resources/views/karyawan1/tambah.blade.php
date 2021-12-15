@extends('layout.ceria')

@section('title', 'Data karyawan1')

@section('content')

<div class="container">
	<h3 class="text-center">Data karyawan1</h3>

	<a href="/karyawan1" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan1/store" method="post" class="table table-success">
		{{ csrf_field() }}
        <div class="">
            <div class="col-4"> NIP </div>
            <div class="col-8">
                <input type="number" name="NIP" required="required">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> nama </div>
            <div class="col-8">
                <input type="text" name="nama" required="required">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> pangkat </div>
            <div class="col-8">
                <input type="text" name="pangkat" required="required">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> gaji </div>
            <div class="col-8">
                <input type="number" name="gaji" required="required"></textarea> <br/>
            </div>
        </div><br/>
		<div class="col-12 text-center">
		    <input type="submit" value="Simpan Data">
        </div>
	</form>
</div>
@endsection
