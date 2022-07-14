<?php
error_reporting(E_ALL);
include 'koneksi.php';

if (isset($_POST['submit']))
{	
	$id 	= $_POST['id'];
	$nama 	= $_POST['nama_obat'];

    $sql = 'INSERT obat SET ';
    $sql .= "nama_obat = '{$nama}'" ;
    $sql .= "WHERE id_obat = '{$id}'";
    $result = mysqli_query($con, $sql);
    header('location: resep.php');
	
	$id = $_POST['id_obat'];
	$sql = 'INSERT INTO resep (id_obat)';
	$sql .= "VALUE ('{$id}')";
	$result = mysqli_query($con, $sql);
	header('location: resep.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
    <script src="../js/bootstrap.min.js"></script>
	<title>Tambah Resep</title>
	<style>
	input[type=text] {
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
		<h2 align="center">Tambah Dokter</h2>
		</header>
		<hr>
			<div class="main">
				<form method="post" action="resep_tambah.php" enctype="multipart/form-data">
					<div class="input mb-3">
						<label for="id_berobat" class="col-sm-2 col-form-label">Nama Pasien</label>
						<input type="text" class="form-control" name="id_berobat" placeholder="Masukan Nama Pasien" required/>
					</div>
					<div class="input mb-3">
						<label for="id_obat" class="col-sm-2 col-form-label">Nama Obat</label>
						<input type="text" class="form-control" name="id_obat" placeholder="Masukan Nama Obat" required/>
					</div>
					<div class="submit">
						<input type="submit" name="submit" value="Simpan" />
						<a href="resep.php" role="button">Batal</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>