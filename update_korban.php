<?php
if (isset($_POST['nama'])) {
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$umur = $_POST['umur'];
		$idBencana = $_POST['idBencana'];
		$posko = $_POST['posko'];
		$foto = $_POST['foto'];
		$kondisi = $_POST['kondisi'];

	$sql = "UPDATE korban SET nama = '$nama', alamat = '$alamat', umur='$umur', idBencana = '$idBencana', posko = '$posko', foto='$foto', kondisi='$kondisi' WHERE id='$id'";
	$result = $koneksi->query($sql);
	if ($result === TRUE) {
	} else {
		echo "Update Gagal". $koneksi->error;
	}
} else {
	print "Gagal";
}
$koneksi->close();
header("Location: korban");
?>