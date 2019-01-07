      <div id="content-wrapper">
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Form Tambah Korban</li>
          </ol>

          <!-- DataTables -->
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
            <div class="row">
          <div class="col-lg-6">
           <form action="korban.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama:</label><input id="nama" name="nama" class="form-control" placeholder="Masukan Nama Korban" required="">
            </div>
            <div class="form-group">
                <label>Alamat:</label><input id="alamat" name="alamat" class="form-control" placeholder="Masukan Alamat Korban">
            </div>
            <div class="form-group">
                <label>Umur:</label><input type="number" min='0' id="umur" name="umur" class="form-control" placeholder="Masukan Umur Korban" required=""> 
            </div>
            <div class="form-group">
                <label>ID Bencana:</label><select id="idBencana" name="idBencana" class="form-control" required="">
                                          <?php include "option.php";?>
                                        </select> 
            </div>
            <div class="form-group">
                <label>Posko Bencana:</label><input id="posko" name="posko" class="form-control" placeholder="Masukan Posko Bencana" required="">
            </div>           
          </div>

          <div class="col-lg-6">
            <div class="form-group">
            <label>Masukan Foto Korban:</label></br>
            <input id="foto" name="foto" type="file" accept="image/x-png,image/gif,image/jpeg">
          </div>
          <div class='form-group'style='display: none'>
          <input type='radio' id='triase' name='triase' value='trans.png' checked><label><img src='triase/trans.png' style='display: none'></label>
          </div>
          <div class="form-group">
            <label>Masukan Kondisi Korban:</label></br>
            <textarea id="kondisi" name="kondisi" class="form-control" rows="12" required=""></textarea>
          </div>
          </div>
        </div>
         <button type="submit" class="btn btn-outline-success">Submit</button>
         <button type="reset" class="btn btn-outline-secondary">Reset</button>
       </form>
      </div>
    </div>
  </div>