<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="container">
		<h1>Form Pendaftaran</h1>
		<form action="hasil_pendaftaran.php" method="POST">
			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea class="form-control" id="alamat" name="alamat"></textarea>
			</div>
			<div class="form-group">
				<label for="telepon">Telepon</label>
				<input type="tel" class="form-control" id="telepon" name="telepon">
			</div>
			<button class="custom-btn btn-1">Read More</button>
		</form>
	</div>

</body>
</html>
