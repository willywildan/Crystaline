 <?php
	 $namaServer = "localhost";
	 $namaPengguna = "root";
	 $password = "";
	 $nama_db = "tugas";
	 
	 $koneksi = new mysqli($namaServer, $namaPengguna, $password, $nama_db);
	 
	 if($koneksi->connect_error){
 		die("Koneksi gagal: " . $koneksi->connect_error . "<br>");
 	}
 ?>
