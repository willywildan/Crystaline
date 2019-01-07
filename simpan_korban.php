<?php
include "conf/Koneksi.php";
$id = $_GET['id'];
$sql = "select * from korban where id='$id'";
$result = $koneksi->query($sql);
if ($result->num_rows > 0) {
	while ($data = $result->fetch_array()) {
		$id = $data['id'];
		$nama = $data['nama'];
		$alamat = $data['alamat'];
		$umur = $data['umur'];
		$idBencana = $data['idBencana'];
		$posko = $data['posko'];
		$foto = $data['foto'];
		$kondisi = $data['kondisi'];
		echo "<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                        </div>
                        <div class='panel-body'>
            <div class='row'>
          <div class='col-lg-6'>
           <form action='update_korban.php' method='POST'>
           <input type='text' name='id' readonly value='".$data['id']."' style='display: none'>
			<div class='form-group'>
                <label>Nama:</label><input id='nama' name='nama' class='form-control' value='".$data['nama']."' required=''>
            </div>
            <div class='form-group'>
                <label>Alamat:</label><input id='alamat' name='alamat' class='form-control' value='".$data['alamat']."'>
            </div>
            <div class='form-group'>
                <label>Umur:</label><input type='number' min='0' id='umur' name='umur' class='form-control' value='".$data['umur']."' required=''> 
            </div>
            <div class='form-group'>
                <label>ID Bencana:</label><input id='idBencana' name='idBencana' class='form-control' value='".$data['idBencana']."' readonly=''>
            </div>
            <div class=' form-group' >
                <label>Posko Bencana:</label><input id=' posko'  name=' posko'  class=' form-control'  value='".$data['posko']."' required=''>
            </div>           
          </div>
          <div class='col-lg-6'>
          <div class='form-group'>
            <label>Foto Korban:</label></br>
            <img src='foto/".$data['foto']."' height='50' width='50' >
          </div>
          <div class='form-group'>
            <label>Masukan Kondisi Korban:</label></br>
            <textarea type='textarea' id='kondisi' type='text' name='kondisi' class='form-control' rows='12'  required=''>".$data['kondisi']."</textarea>
          </div>
          </div>
			</div>";
	}
	echo "<button type='submit' class='btn btn-default'>Submit</button>
         <button type='reset' class='btn btn-default'>Reset</button>
       </form>
      </div>
    </div>
  </div>";
} else {
	echo "Data Dengan Kode Departemen $id Tidak Ditemukan";
}
$koneksi->close();
?>