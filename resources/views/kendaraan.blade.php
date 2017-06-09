<!DOCTYPE html>
<html>
<head>
	<title>Ini Halaman Index</title>
</head>
<body>

<h1>Daftar Kendaraan: </h1>
	@foreach ($kendaraan as $kend)
	<li>{{ $kend }}</li>
	@endforeach

</body>
</html>