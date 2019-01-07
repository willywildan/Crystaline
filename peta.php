<?php 
if(isset($_POST['lokasi']))
{
	$lokasi = $_POST['lokasi'];
	$tipe = $_POST['tipe'];
	$skala = $_POST['skala'];
	$tingkat = $_POST['tingkat'];
	$tanggal = $_POST['tanggal'];

	include "conf/Koneksi.php";
	$lokasi = mysqli_real_escape_string($koneksi, $_POST['lokasi']);
	$tipe = mysqli_real_escape_string($koneksi, $_POST['tipe']);
	$skala = mysqli_real_escape_string($koneksi, $_POST['skala']);
	$tingkat = mysqli_real_escape_string($koneksi, $_POST['tingkat']);
	$tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);

	$sql = "INSERT INTO bencana (lokasi, tipe, skala, tingkat, tanggal) VALUES ('$lokasi', '$tipe', '$skala', '$tingkat', '$tanggal')";
 
	if($koneksi->query($sql) === TRUE){
	}
	else
	{
	 	echo "Error" . $sql . "<br/>" . $koneksi->error;
	}
	$koneksi->close();
	header("Location: bencana");
	
}
?>