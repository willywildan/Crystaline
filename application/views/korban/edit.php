<div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tambah Korban</li>
          </ol>

          <!-- DataTables Example -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
            <div class="row">
          <div class="col-lg-6">
            
           <form action="<?php echo site_url('korban/update')?>" method="POST">
            <input type="hidden" name="id" value="<?=$edit->id?>">
            
            <div class="form-group">
                <label>Nama:</label>
                <input id="nama" type="text" class="form-control" name="nama"  value="<?=$edit->nama?>">
            </div>

            <div class="form-group">
                <label>Alamat:</label>
                <input type="text" name="alamat"  class="form-control" value="<?=$edit->alamat?>" >
            </div>
            <div class="form-group">
                <label>Umur:</label>
                <input type="text" name="umur"  class="form-control" value="<?=$edit->umur?>" >
            </div>
            <div class="form-group">
                <label>ID Bencana:</label>
                <input type="text"  class="form-control" name="idBencana" readonly value="<?=$edit->idBencana?>"> 
            </div>
            <div class="form-group">
                <label>Posko Bencana:</label>
                <input type="text" name="posko"  class="form-control" value="<?=$edit->posko?>" >
            </div>           
          </div>

          <div class="col-lg-6">
            <div class="form-group">
             <ul class="gallery">
              <img src="<?php echo base_url('foto/'.$edit->foto); ?>" height='50' width='50'  >
          </div>
          <div class="form-group">
            <label>Masukan Kondisi Korban:</label></br>
            <textarea type="textarea" id="kondisi" type="text" name="kondisi" class="form-control" rows="12"  required=""><?=$edit->kondisi?></textarea>
          </div>
          
          </div>
        </div>

         <button type="submit" class="btn btn-primary">Submit</button>
         <button type="reset" class="btn btn-default">Reset</button>
       </form>

      </div>
    </div>
  </div>