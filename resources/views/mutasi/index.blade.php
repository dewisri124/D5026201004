<html>
<head>
	<title>Tugas PWEB</title>
</head>
<body>

	<h2>Dewi Sri Wahyuni</h2>
	<h3>Data mutasi</h3>

	<a href="/mutasi/tambah"> + Tambah pegawai mutasi</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>IDPegawai</th>
			<th>Departemen</th>
			<th>SubDepartemen</th>
			<th>MulaiBertugas</th>
		</tr>
		@foreach($mutasi as $p)
		<tr>
			<td>{{ $p->mutasi_ID }}</td>
			<td>{{ $p->mutasi_IDPegawai }}</td>
			<td>{{ $p->mutasi_Departemen }}</td>
			<td>{{ $p->mutasi_SubDepartemen }}</td>
            <td>{{ $p->mutasi_MulaiBertugas }}</td>
            <td>{{ $p->Opsi }}</td>
			<td>
				<a href="/mutasi/edit/{{ $p->mutasi_id }}">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $p->mutasi_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
