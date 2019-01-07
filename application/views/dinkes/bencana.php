    <div id="content-wrapper">
    <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Data Bencana</li>
          </ol>

          <!-- DataTables -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Daftar Bencana</div>
            <div class="card-body">
              <div class="table-responsive" id="korban">
                  <table class="table table-striped table-hover" id="dataTable" cellspacing="0">
                    <thead >
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Lokasi</th>
                  <th scope="col">Tipe</th>
                  <th scope="col">Skala</th>
                  <th scope="col">Kerusakan</th>
                  <th scope="col">Tanggal</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($bencana as $data ) : {?>
                  <tr>
                    <td><?=$data['id']?></td>
                    <td><?=$data['lokasi']?></td>
                    <td><?=$data['tipe']?></td>
                    <td><?=$data['skala']?></td>
                    <td><?=$data['tingkat']?></td>
                    <td><?=$data['tanggal']?></td>
                  </tr>
               <?php }endforeach; ?>
              </tbody>
              </table>
               
              </div>

            </div>
          </div>

        </div>
	<script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
 <script src="<?php echo base_url()?>js/demo/datatables-demo.js"></script>