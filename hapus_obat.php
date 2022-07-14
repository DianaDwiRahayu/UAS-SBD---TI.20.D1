<?php
	include_once 'koneksi.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM obat WHERE id_obat = '{$id}'";
	$result = mysqli_query($con, $sql);
	header('location: obat.php');
	if (!$con){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>