      <link href="<?php echo base_url()?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">    
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
              <div class="table-responsive" id="korban">
                	<table class="table table-striped table-hover" id="dataTable" cellspacing="0">
	                	<thead >
						    <tr>
						      <th scope="col">id</th>
						      <th scope="col">Nama</th>
						      <th scope="col">Kondisi</th>
						      <th scope="col">Umur</th>
						      <th scope="col">Triase</th>
						      <th scope="col">Opsi</th>
						    </tr>
						  </thead>
						  <tfoot >
						    <tr>
						      <th scope="col">id</th>
						      <th scope="col">Nama</th>
						      <th scope="col">Kondisi</th>
						      <th scope="col">Umur</th>
						      <th scope="col">Triase</th>
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
						  			<td> <img src="<?php echo base_url('triase/'.$data['triase']); ?>"></td>
						  			<td>
						  			<a class="btn btn-outline-info btn-sm" href="<?php echo site_url('Dinkesdashboard/edit/'.$data['id'])?>">Update</a>
						  		    </td>
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

