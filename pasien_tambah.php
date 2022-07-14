<?php
error_reporting(E_ALL);
include 'koneksi.php';

if (isset($_POST['submit']))
{
	$nama = $_POST['nama_pasien'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$umur = $_POST['umur'];
	$sql = 'INSERT INTO pasien (nama_pasien, jenis_kelamin, umur )';
	$sql .= "VALUE ('{$nama}', '{$jenis_kelamin}', '{$umur}') ";
	$result = mysqli_query($con, $sql);
	if ($result) {
		echo "<script>alert('Data pasien berhasil ditambahkan');
		window.location.href='pasien.php'</script>";
	} else {
		echo "<script>alert('Data pasien gagal ditambahkan');
		window.location.href='pasien.php'</script>";
	} 
	header('location: pasien.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="fontawesome/css/all.css" />
	<title>Tambah Pasien</title>
	<style>
	input[type=text], select {
  width: 20%;
  padding: 7px 7px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 5%;
  background-color: #4CAF50;
  color: white;
  padding: 7px 7px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
	<div>
		<div class="p-5 shadow">
		<header>
		<h2 align="center">Tambah Pasien</h2>
		</header>
		<hr>
			<div class="main">
				<form method="post" action="pasien_tambah.php" enctype="multipart/form-data">
					<div class="input mb-3">
						<label for="nama_pasien" class="col-sm-2 col-form-label">Nama Pasien</label>
						<input type="text" class="form-control" name="nama_pasien" placeholder="Masukan Nama Pasien" required/>
					</div>
					<div class="input mb-3">
						<label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin :</label>
						<input type="radio" name="jenis_kelamin" value="Laki-laki" <checked/> Laki-laki
						<input type="radio" name="jenis_kelamin" value="Perempuan" <checked/> Perempuan
					</div>
					<div class="input mb-3">
						<label for="nama_pasien" class="col-sm-2 col-form-label">Umur</label>
						<input type="number" class="form-control" name="umur" placeholder="Umur" required/>
					</div>
					<div class="submit">
						<input type="submit" name="submit" value="Simpan" />
						<a href="pasien.php" role="button">Batal</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>