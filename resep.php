<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="fontawesome/css/all.css" />
    <title>Menampilkan data dari database</title>
	<style>
		.hero {
			background-color: #DC143C;
			border-radius: 5px;
			padding: 10px 23px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container shadow p-3">
	<header>
		<h2 align="left" class="hero text-white">Tabel Resep</h2>
	</header>
	<hr>
	<div class="btn-toolbar mb-2 mb-md-10">
			<a class="btn btn-primary" href="resep_tambah.php" role="button">Tambah</a>
		</div>
	<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>No</td>
				<td>Id Resep</td>
				<td>Id Berobat</td>
				<td>Id Obat</td>               
            </tr>
        </thead>
		<?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($con, 'SELECT * FROM resep_obat');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id_resep'] ?></td>
                <td><?php echo $data['id_berobat'] ?></td>
				<td><?php echo $data['id_obat'] ?></td>
            </tr>
        <?php } ?>
    </table>
	</div>
	<div class="btn-toolbar mb-2 mb-md-10">
		<a class="btn btn-primary" href="data.php" role="button">Kembali</a>
	</div> 
	<?php require "footer.php";?>
</div>
</body>
</html>