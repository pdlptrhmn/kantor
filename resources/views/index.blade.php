<!DOCTYPE html>
<html>
<head>
	<title>Ini Halaman Index</title>
</head>
<body>

<h1>Daftar Nama: </h1>
	@foreach ($data as $datab)
	<li>{{ $datab }}</li>
	@endforeach

</body>
</html>