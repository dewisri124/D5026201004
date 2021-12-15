@extends('layout.ceria')

@section('title', 'Data karyawan1')

@section('content')

<div class="container">
	<h3 class="text-center">Data karyawan1</h3>
	<a href="/karyawan1/tambah" class="btn btn-secondary"> + Tambah karyawan1 Baru</a>
	<br/>
	<div class="container" align="center">
        <p>Cari Data karyawan1 Berdasarkan NIP :</p>
	    <form action="/karyawan1/cari" method="GET">
            <input class="form-control" type="text" name="cari" placeholder="Cari karyawan1 .." value="{{ old('cari') }}">
            <input class="form-control btn-success" type="submit" value="CARI">
	    </form>
    </div>
	<table border="1" class="table table-primary mt-3">
		<tr>
            <th>No</th>
			<th>NIP</th>
			<!--<th>nama</th>
			<th>pangkat</th>-->
			<th>gaji</th>
			<th>Opsi</th>
		</tr>

		@foreach($karyawan1 as $p)

		<tr>
			<td>{{ $loop->iteration }}</td>
            <td>{{ $p->karyawan1_NIP }}</td>
			<!--<td>{{ $p->karyawan1_nama }}</td>
			<td>{{ $p->karyawan1_pangkat }}</td> -->
			<td>{{ $p->karyawan1_gaji }}</td>
			<td>
                <a href="/karyawan1/detail/{{ $p->karyawan1_id }}" class="btn btn-info">View Detail</a>
				<a href="/karyawan1/edit/{{ $p->pkaryawan1_id }}" class="btn btn-warning">Edit</a>
				<a href="/karyawan1/hapus/{{ $p->karyawan1_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $karyawan1->links() }}

</div>

@endsection
