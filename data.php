<?php
	require "koneksi.php";
	require "session.php";
	
	$querypasien = mysqli_query($con, "SELECT * FROM pasien");
	
	$queryobat = mysqli_query($con, "SELECT * FROM obat");
	
	$querydokter = mysqli_query($con, "SELECT * FROM dokter");
	
	$queryobat = mysqli_query($con, "SELECT * FROM obat");
	
	$queryresep_obat = mysqli_query($con, "SELECT * FROM resep_obat");
	
	$queryberobat = mysqli_query($con, "SELECT * FROM berobat");
	
	$queryuser = mysqli_query($con, "SELECT * FROM user");
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="fontawesome/css/all.css" />
	<style> 
		.navbar{
			background-color: #DC143C;
		}
		.hero {
			background-color: #FAEBD7;
			padding: 50px 23px;
			margin-bottom: 20px;
		}
		.super {
			background-color: #FAEBD7;
			padding: 50px 23px;
			margin-bottom: 20px;
		}
		
		.kotak {
			border: solid;
		}
		.summary-pasien{
			background-color: #FFA500;
			border-radius: 15px;
		}
		.summary-obat{
			background-color: #48D1CC;
			border-radius: 15px;
		}
		.summary-dokter{
			background-color: #FF1493;
			border-radius: 15px;
		}
		.summary-resep_obat{
			background-color: #CCE46E;
			border-radius: 15px;
		}
		.summary-berobat{
			background-color: #ADFF2F;
			border-radius: 15px;
		}
		.no-decoration{
			text-decoration: none;
		}
		.container-data {
			background-color: #FFFAF0;
			padding: 50px 23px;
			margin-bottom: 20px;
		}
</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark">
		<div class="container">
			<a class="navbar-brand"><i class="fa-brands fa-r-project fa-2x"></i>Klinik Rahayu</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item active">
				<a class="nav-link" href="index.php"><i class="fa fa-hospital fa-2x"></i> Home </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="data.php"> <i class="fa fa-book-medical fa-2x"></i>Data</a> 
			</li>
			<li class="nav-item">
					<a class="nav-link" href="logout.php"> <i class="fa fa-book-medical fa-2x"></i>Logout</a> 
				</li>
			</ul>
		</div>
	</nav>
	<div class="container mt-4">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
			<li class="breadcrumb-item active" aria-current="page">
				<i class="fa fa-solid fa-user"></i>
				Selamat Datang Admin
			</li>
		  </ol>
		</nav>
	<hr>
	<div class="container-data mt-4">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-12 mb-3">
				<div class="summary-pasien p-3">
					<div class="row">
						<div class="col-6">
							<i class="fa fa-solid fa-bed fa-5x"></i>
						</div>
						<div class="col-6 text-white">
							<p>
							<h5> <a href="pasien.php" class="text-white no-decoration"> Data Pasien</a></h5>
							<p> <a href="pasien.php" class="text-white no-decoration">Lihat Detail</a></p>
						</div>
					</div>
				</div>
			</div>
	<div class="col-lg-4 col-md-6 col-12 mb-3">
		<div class="summary-dokter p-3">
			<div class="row">
				<div class="col-6">
					<i class="fa fa-solid fa-user-doctor fa-5x"></i>
				</div>
				<div class="col-6 text-white">
					<p>
					<h5> <a href="dokter.php" class="text-white no-decoration"> Data Dokter</a></h5>
					<p> <a href="dokter.php" class="text-white no-decoration">Lihat Detail</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 col-12 mb-3">
		<div class="summary-obat p-3">
			<div class="row">
				<div class="col-6">
					<i class="fa fa-solid fa-tablets fa-5x"></i>
				</div>
				<div class="col-6 text-white">
					<p>
					<h5> <a href="obat.php" class="text-white no-decoration"> Data Obat</a></h5>
					<p> <a href="obat.php" class="text-white no-decoration">Lihat Detail</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 col-12 mb-3">
		<div class="summary-resep_obat p-3">
			<div class="row">
				<div class="col-6">
					<i class="fa fa-solid fa-tablets fa-5x"></i>
				</div>
				<div class="col-6 text-white">
					<p>
					<h5> <a href="resep.php" class="text-white no-decoration"> Data Resep Obat</a></h5>
					<p> <a href="resep.php" class="text-white no-decoration">Lihat Detail</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 col-12 mb-3">
		<div class="summary-berobat p-3">
			<div class="row">
				<div class="col-6">
					<i class="fa fa-solid fa-stethoscope fa-5x"></i>
				</div>
				<div class="col-6 text-white">
					<p>          
					<h5> <a href="berobat.php" class="text-white no-decoration"> Data Berobat</a></h5>
					<p> <a href="berobat.php" class="text-white no-decoration">Lihat Detail</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
	<?php require "footer.php";?>
</div>
</body>
</html>