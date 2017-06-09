<!DOCTYPE html>
<html>
<head>
	<title>Ini Halaman Index</title>
</head>
<body>

<h1>Daftar : </h1>
	@foreach ($ddd as $bina)
	<li>{{ $bina }}</li>
	@endforeach


</body>
</html>