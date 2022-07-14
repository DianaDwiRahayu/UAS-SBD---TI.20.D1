<?php
$host="localhost";
$user="adminklinik";
$password="312010055";
$db="klinik_312010055";

$con = mysqli_connect($host,$user,$password,$db);
if (!$con){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>