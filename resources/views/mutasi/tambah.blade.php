<html>
<head>
	<title>Dewi Sri Wahyuni</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data mutasi</h3>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
		ID <input type="int" name="ID" required="required"> <br/>
		IDPegawai <input type="int" name="IDPegawai" required="required"> <br/>
		Departemen<input type="varchar" name="Departemen" required="required"> <br/>
		SubDepartemen<input type="varchar" name="SubDepartemen" required="required"> <br/>
        MulaiBertugas<input type="DateTime" name="MulaiBertugas" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
