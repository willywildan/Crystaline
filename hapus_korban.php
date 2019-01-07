<?php
include "conf/Koneksi.php";
$id=$_GET['id'];
$sql = "delete from korban where id='$id'";
$result = $koneksi->query($sql);
if ($result === FALSE) {
	echo "Hapus Data Gagal. Pesan Error: ".$koneksi->error;
}
$koneksi->close();
header("Location: korban");
?>