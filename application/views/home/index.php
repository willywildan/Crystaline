
<div id="content-wrapper">
  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Overview</li>
    </ol>

          <!-- Icon Cards-->
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-fw fa-life-ring"></i>
            </div>
              <div class="mr-5">
                <?php include "jumlah.php";?>
              </div>
          </div>
                <a class="card-footer text-white clearfix small z-1" href="<?= base_url();?>korban">
                  <span class="float-left">
                    Lihat Detail
                  </span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
        </div>
      </div>

            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <center>
                    <h3> <?php include "jumlah_kuning.php";?></h3>
                  </center>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <center>
                    <h3> <?php include "jumlah_hijau.php";?></h3>
                  </center>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <center>
                    <h3> <?php include "jumlah_merah.php";?></h3>
                  </center>
                </div>
              </div>
            </div>
    </div>

          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Jumlah Kartu Triase
            </div>
                <div class="card-body">
                  <canvas id="myBarChart" width="100%" height="50"></canvas>
                </div>
          </div>

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Detail Umur Korban
            </div>
                <div class="card-body">
                  <canvas id="myLineChart" width="100%" height="50"></canvas>
                </div>
          </div>

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Jumlah Bencana
            </div>
                <div class="card-body">
                  <canvas id="myPieChart" width="100%" height="50"></canvas>
                </div>
          </div>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Daftar Korban
            </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover" id="dataTable" cellspacing="0">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Kondisi</th>
                        <th scope="col">Posko</th>
                        <th scope="col">Triase</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Kondisi</th>
                        <th scope="col">Posko</th>
                        <th scope="col">Triase</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php foreach ($korban as $data ) : {?>
                        <tr>
                          <td><?=$data['id']?></td>
                          <td><?=$data['nama']?></td>
                          <td><?=$data['umur']?></td>
                          <td><?=$data['kondisi']?></td>
                          <td><?=$data['posko']?></td>
                          <td> <img src="<?php echo base_url('triase/'.$data['triase']); ?>"></td>
                        </tr>
                      <?php } endforeach;  ?>
                    </tbody> 
                  </table>
                </div>
              </div>
          </div>
  </div>
<!-- </div>
</div> -->

 <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
 <script src="<?php echo base_url()?>js/demo/datatables-demo.js"></script>
