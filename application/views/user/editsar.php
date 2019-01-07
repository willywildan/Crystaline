<title>Edit Profil</title>
<div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Edit Profil</li>
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
            
           <form action="<?php echo site_url('login/updatesar')?>" method="POST">
            <input type="hidden" name="id" value="<?php echo $this->session->userdata('id'); ?>">
            <input type="hidden" name="level" value="<?php echo $this->session->userdata('level'); ?>">
            
            
            <div class="form-group">
                <label>Nama:</label>
                <input id="nama" type="text" class="form-control" name="nama"  value="<?php echo $this->session->userdata('nama'); ?>" readonly="">
            </div>

            <div class="form-group">
                <label>NIK:</label>
                <input type="text" name="nik"  class="form-control" value="<?php echo $this->session->userdata('nik'); ?>" readonly="">
            </div>
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username"  class="form-control" value="<?php echo $this->session->userdata('username'); ?>">
              </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text"  class="form-control" name="email" value="<?php echo $this->session->userdata('email'); ?>" > 
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password"  class="form-control" value="<?php echo $this->session->userdata('password'); ?>">
            </div>
          </div>
            


          <div class="col-lg-6">
            <div class="form-group">
             <ul class="gallery">
              <label>Foto Profile:</label><br>
              <img  src="<?php echo base_url('avatar/'.$this->session->userdata('avatar')); ?>" height='auto' width='auto' class="img-fluid img-thumbnail">
            </ul>
          </div>
          <div class="form-group">
            <label>Ganti Foto Profile:</label>
            <input id="avatar" type="file" class="form-control" name="avatar"  value="<?php echo $this->session->userdata('avatar'); ?>">
          </div>
        </div>
      </div>
        <button type="submit" class="btn btn-outline-success">Submit</button>
         <button type="reset" class="btn btn-outline-secondary">Reset</button>           
        
         
       </form>
      </div>
    </div>
  </div>