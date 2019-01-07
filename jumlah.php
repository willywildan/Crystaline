<?php
include "conf/Koneksi.php";
$sql    ="SELECT * FROM korban";
$result = $koneksi->query($sql);
$count    =mysqli_num_rows($result);
echo "Total: $count";
$koneksi->close();
?>