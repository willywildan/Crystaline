<?php
include "conf/Koneksi.php";
header('Content-Type: application/json');
$sql    ="SELECT triase FROM korban";
$result = $koneksi->query($sql);
/*$merah = 0;
$kuning = 0;
$hijau = 0;*/
$data = array();
/*if ($result->num_rows>0) 
{
	while ($baris=$result->fetch_assoc()) 
	{
		$triase = $baris['triase'];
		if ($triase == "red.png") 
		{
			++$merah;
		} if ($triase == "yellow.png") 
		{
			++$kuning;
		} if ($triase == "green.png") 
		{
			++$hijau;
		}
	}
}*/
foreach ($result as $row) {
	$data[] = $row;
}
$koneksi->close();
print json_encode($data);
?>