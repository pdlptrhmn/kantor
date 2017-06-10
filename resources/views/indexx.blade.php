<!DOCTYPE html>
<html>
<head>
	<title>Coba</title>
</head>
<body bgcolor="">
	<h1><center>Tabel</center></h1>
	<table border="3" align="center">
	<tr>
		<td>ID</td>
		<td>Nama</td>
		<td>Kelas</td>
		<td>Jurusan</td>
		<td>Jenis Kelamin</td>
		</tr>
			@foreach ($tampilan as $data)
	<tr>
		<td>{{ $data->id}}</td>
		<td>{{ $data->nama}}</td>
		<td>{{ $data->kelas}}</td>
		<td>{{ $data->jurusan}}</td>
		<td>{{ $data->jeniskelamin}}</td>
	</tr>
		@endforeach

	</table>

</body>
</html>