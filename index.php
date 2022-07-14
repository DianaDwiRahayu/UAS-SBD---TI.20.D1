<?php
	require "koneksi.php";
	
	$querypasien = mysqli_query($con, "SELECT * FROM pasien");
	$jumlahpasien = mysqli_num_rows($querypasien);
	
	$queryobat = mysqli_query($con, "SELECT * FROM obat");
	$jumlahobat = mysqli_num_rows($queryobat);
	
	$querydokter = mysqli_query($con, "SELECT * FROM dokter");
	$jumlahdokter = mysqli_num_rows($querydokter);
	
	$queryberobat = mysqli_query($con, "SELECT * FROM berobat");
	$jumlahberobat = mysqli_num_rows($queryberobat);

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
			<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-light" type="submit">Search</button>
			</form>
		</div>
		</nav>
	<div class="container mt-4">
		<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item active" aria-current="page">
					<h3><i class="fa-solid fa-house-chimney"></i>
					Beranda</h3>
				</li>
			  </ol>
		</nav>
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
			<li class="breadcrumb-item active" aria-current="page">
				<i class="fa fa-solid fa-user"></i>
				Selamat Datang di Sistem Informasi Klinik
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
								<i class="fa fa-solid fa-bed fa-8x"></i>
							</div>
							<div class="col-6 text-white">
								<p>
								<h2 class="fs-1"><?php echo $jumlahpasien; ?></h2>
								<p> <a href="pasien.php" class="text-white no-decoration"> Data Pasien</a></p>
							</div>
						</div>
					</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-dokter p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa fa-thin fa-user-doctor fa-8x"></i>
							</div>
							<div class="col-6 text-white">
								<p>
								<h2 class="fs-1"><?php echo $jumlahdokter; ?> </h2>
								<p> <a href="dokter.php" class="text-white no-decoration"> Data Dokter</a></p>
							</div>
						</div>
					</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-obat p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa fa-solid fa-tablets fa-8x"></i>
							</div>
							<div class="col-6 text-white">
								<p>
								<h2 class="fs-1"><?php echo $jumlahobat; ?></h2>
								<p> <a href="obat.php" class="text-white no-decoration"> Data Obat</a></p>
							</div>
						</div>
					</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-berobat p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa fa-thin fa-user-doctor fa-8x"></i>
							</div>
							<div class="col-6 text-white">
								<p>
								<h2 class="fs-1"><?php echo $jumlahberobat; ?> </h2>
								<p> <a href="berobat.php" class="text-white no-decoration"> Data Berobat</a></p>
							</div>
						</div>
					</div>
			</div>
			 <!-- IMPLEMENTASI VIEW -->
			<div class="card" style="margin-top:2rem;">
				<div class="card-body">
					<h4>Data Pasien Laki-Laki</h4>
					<div class="container mt-4">
						<table class="table" style="margin-top:1rem;">
							<thead>
								<tr>
									<td>No.</td>
									<td>Nama Pasien</td>
									<td>Jenis Kelamin</td>
									<td>Umur</td>
								</tr>
							</thead>
							<?php
								$no = 1;
								$query = mysqli_query($con, 'SELECT * FROM total_pasien_lakilaki');
								while ($data = mysqli_fetch_array($query)) {
							?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $data['nama_pasien'] ?></td>
								<td><?= $data['jenis_kelamin'] ?></td>
								<td><?= $data['umur'] ?></td>
							</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require "footer.php";?>
</div>
</body>
</html>