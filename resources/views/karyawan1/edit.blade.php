@extends('layout.ceria')

@section('title', 'Data karyawan1')

@section('content')

<div class="container">
	<h3 class="text-center">Edit karyawan1</h3>

	<a href="/karyawan1" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan1 as $p)
	<form action="/karyawan1/update" method="post" class="table table-success">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->karyawan1_id }}"> <br/>
        <div class="">
            <div class="col-4"> NIP </div>
            <div class="col-8">
                <input type="number" required="required" name="NIP" value="{{ $p->karyawan1_NIP }}">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> nama </div>
            <div class="col-8">
                <input type="text" required="required" name="jabatan" value="{{ $p->karyawan1_nama }}">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> pangkat </div>
            <div class="col-8">
                <input type="text" required="required" name="pangkat" value="{{ $p->karyawan1_pangkat }}">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> gaji </div>
            <div class="col-8">
                <textarea required="required" name="gaji">{{ $p->karyawan1_gaji }}</textarea> <br/>
            </div>
        </div><br/>
		<div class="col-12 text-center">
		    <input type="submit" value="Simpan Data">
        </div>
	</form>
	@endforeach
</div>

@endsection
