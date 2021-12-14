@extends('layout.ceria')

@section('title', 'Data kursi')

@section('content')

<div>
    <div class="container">
	<h3 class="text-center mt-1">Data kursi</h3>
	<a href="/kursi/tambah" class="btn btn-secondary" > + Tambah Data kursi</a>
	<br/>
    <div class="container" align="center">
        <p>Temukan kursi berdasarkan merk :</p>
	    <form action="/kursi/cari" method="GET">
            <input class="form-control" type="text" name="cari" placeholder="Cari kursi .." value="{{ old('cari') }}">
            <input class="form-control btn-primary" type="submit" value="CARI">
	    </form>
    </div>
	<table class="table table-success table-striped mt-3">
		<tr>
			<th>Kodekursi</th>
			<th>Merkkursi</th>
			{{-- <th>Stock kursi</th>
			<th>Tersedia</th> --}}
			<th>Opsi</th>
		</tr>
		@foreach($kursi as $mo)
		<tr>
			<td>{{ $mo->kodekursi }}</td>
			<td>{{ $mo->Merkkursi }}</td>
			{{--<td>{{ $mo->stockkursi }}</td>
			<td>{{ $mo->tersedia }}</td>--}}
			<td>
                <a href="/kursi/detail/{{ $mo->kodekursi }}" class="btn btn-info" >View Detail</a>
				<a href="/kursi/edit/{{ $mo->kodekursi }}" class="btn btn-warning" >Edit</a>
				<a href="/kursi/hapus/{{ $mo->kodekursi }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

        {{ $kursi->links() }}

    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>



@endsection
