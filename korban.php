<?php 
if(isset($_POST['nama']))
{
	$target = "c:/xampp/htdocs/Crystaline/foto/".basename($_FILES['foto']['name']);
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$umur = $_POST['umur'];
	$idBencana = $_POST['idBencana'];
	$posko = $_POST['posko'];
	$foto = $_FILES['foto']['name'];
	$kondisi = $_POST['kondisi'];
	$triase = $_POST['triase'];

	include "conf/Koneksi.php";
	$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
	$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
	$umur = mysqli_real_escape_string($koneksi, $_POST['umur']);
	$idBencana = mysqli_real_escape_string($koneksi, $_POST['idBencana']);
	$posko = mysqli_real_escape_string($koneksi, $_POST['posko']);
	$kondisi = mysqli_real_escape_string($koneksi, $_POST['kondisi']);
	$triase = mysqli_real_escape_string($koneksi, $_POST['triase']);
	

	$sql = "INSERT INTO korban (nama, alamat, umur, idBencana, posko, foto, kondisi, triase) VALUES ('$nama', '$alamat', '$umur', '$idBencana', '$posko', '$foto', '$kondisi', '$triase')";

	if (move_uploaded_file($_FILES['foto']['tmp_name'], $target)) {
  	}else{
  		echo "Failed to upload image";
  	}
 
	if($koneksi->query($sql) === TRUE){
	}
	else
	{
	 	echo "Error" . $sql . "<br/>" . $koneksi->error;
	}
	$koneksi->close();
	header("Location: korban");

}
?>