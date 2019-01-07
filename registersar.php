<?php 
if(isset($_POST['nama']))
{
	$target = "c:/xampp/htdocs/Crystaline/avatar/".basename($_FILES['avatar']['name']);
	$nama = $_POST['nama'];
	$nik = $_POST['nik'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$avatar = $_FILES['avatar']['name'];
	$level = $_POST['level'];


	include "conf/Koneksi.php";
	$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
	$nik = mysqli_real_escape_string($koneksi, $_POST['nik']);
	$username = mysqli_real_escape_string($koneksi, $_POST['username']);
	$email = mysqli_real_escape_string($koneksi, $_POST['email']);
	$password = mysqli_real_escape_string($koneksi, $_POST['password']);
	$level = mysqli_real_escape_string($koneksi, $_POST['level']);

	$sql = "INSERT INTO users (nama, nik, username, email, password, avatar,level) VALUES ('$nama', '$nik', '$username', '$email', '$password', '$avatar','$level')";

	if (move_uploaded_file($_FILES['avatar']['tmp_name'], $target)) {
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
	header("Location: loginsar");
}
?>