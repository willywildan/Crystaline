      
      <div id="content-wrapper">
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Data Korban</li>
          </ol>

          <!-- DataTables -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Daftar Korban</div>
            <div class="card-body">
              <div class="table-responsive">
                	<table class="table table-striped table-hover" id="dataTable" cellspacing="0">
	                	<thead >
						    <tr>
						      <th scope="col">id</th>
						      <th scope="col">Nama</th>
						      <th scope="col">Kondisi</th>
						      <th scope="col">Umur</th>
						      <th scope="col">Posko</th>
						      <th scope="col">Opsi</th>
						    </tr>
						  </thead>
						  <tfoot>
						    <tr>
						      <th scope="col">id</th>
						      <th scope="col">Nama</th>
						      <th scope="col">Kondisi</th>
						      <th scope="col">Umur</th>
						      <th scope="col">Posko</th>
						      <th scope="col">Opsi</th>
						    </tr>
						  </tfoot>
						  <tbody>
						  	<?php foreach ($korban as $data ) : {?>
						  		<tr>
						  			<td><?=$data['id']?></td>
						  			<td><?=$data['nama']?></td>
						  			<td><?=$data['kondisi']?></td>
						  			<td><?=$data['umur']?></td>
						  			<td><?=$data['posko']?></td>
						  			<td>
						  				<a class="btn btn-outline-info btn-sm" href="<?php echo site_url('korban/edit/'.$data['id'])?>">Edit</a>
						  				<a onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-outline-danger btn-sm" href="<?php echo site_url('korban/hapus/'.$data['id'])?>">Hapus</a>
						  			</td>
						  		</tr>
						  	 	 <?php }endforeach; ?>
						  </tbody>
						  </table>

                 <div class="row mt-3">
					<div class="col-md-6">
						<a  href="korbantambah" class="btn btn-outline-primary">Tambah Korban</a>
					</div>
				</div>

              </div>

            </div>
          </div>

        </div>

  <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
 <script src="<?php echo base_url()?>js/demo/datatables-demo.js"></script>
