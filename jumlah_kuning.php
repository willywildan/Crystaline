<?php
include "conf/Koneksi.php";
$sql    ="SELECT * FROM korban WHERE triase='yellow.png'";
$result = $koneksi->query($sql);
$count    =mysqli_num_rows($result);
echo "$count </br> Orang";
$koneksi->close();
?>