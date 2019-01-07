<?php
include "conf/Koneksi.php";
$sql = "SELECT * from bencana";
$result = $koneksi->query($sql);
if ($result->num_rows>0) {
	while ($baris=$result->fetch_assoc()) {
		$id = $baris['id'];
		$tipe = $baris['tipe'];
		$lokasi = $baris['lokasi'];
		$tanggal = $baris['tanggal'];
		echo "<option>$id<label>:</label>$tipe<label>:</label>$lokasi<label>:</label>$tanggal</option>";
		}
} else {
	echo "Data Tidak Ditemukan";
}
$koneksi->close();
?>