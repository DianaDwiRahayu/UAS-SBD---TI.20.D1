<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM pasien WHERE id_pasien = '{$id}'";
	$result = mysqli_query($con, $sql);
	header('location: pasien.php');
	if (!$con){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>