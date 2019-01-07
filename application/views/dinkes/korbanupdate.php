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
            
           <form action="<?php echo site_url('Dinkesdashboard/update')?>" method="POST">
            <input type="hidden" name="id" value="<?=$edit->id?>">
            <input type='hidden' name='alamat' readonly value="<?=$edit->alamat?>">
            <input type='hidden' name='posko' readonly value="<?=$edit->posko?>">
            <input type='hidden' name='foto' readonly value="<?=$edit->foto?>">

            
            <div class="form-group">
                <label>Nama:</label>
                <input id="nama" type="text" readonly class="form-control" name="nama"  value="<?=$edit->nama?>">
            </div>
            <div class="form-group">
                <label>Umur:</label>
                <input type="text" name="umur" readonly class="form-control" value="<?=$edit->umur?>" >
              </div>
            <div class="form-group">
                <label>ID Bencana:</label>
                <input type="text"  class="form-control" readonly name="idBencana" readonly value="<?=$edit->idBencana?>"> 
            </div>
           <div class='form-group'>
            <label>Pilih Triase Korban:</label></br>
          <input type='radio' id='triase' name='triase' value='red.png' checked><label><img src="<?php echo base_url('triase/red.png'); ?>"></label></br>
          <input type='radio' id='triase' name='triase' value='yellow.png' ><label><img src="<?php echo base_url('triase/yellow.png'); ?>"></label></br>
          <input type='radio' id='triase' name='triase' value='green.png' ><label><img src="<?php echo base_url('triase/green.png'); ?>"></label>
          </div>           
          </div>

          <div class="col-lg-6">
            <div class="form-group">
            <label>Masukan Foto Korban:</label></br>
            <img src="<?php echo base_url('foto/'.$edit->foto); ?>" height='50' width='50'  >
          </div>
          <div class="form-group">
            <label>Masukan Kondisi Korban:</label></br>
            <textarea type="textarea" id="kondisi" type="text" readonly name="kondisi" class="form-control" rows="12"  required="">"<?=$edit->kondisi?>"</textarea>
          </div>
          </div>
        </div>
         <button type="submit" class="btn btn-primary">Submit</button>
         <button type="reset" class="btn btn-default">Reset</button>
       </form>
      </div>
    </div>
  </div>

    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url()?>js/demo/datatables-demo.js"></script>