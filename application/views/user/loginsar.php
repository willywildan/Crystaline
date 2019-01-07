<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <title>SIMPATI - Tim SAR</title>
    <link rel="icon" href="<?=base_url()?>/logo.png" type="image/png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link href="<?php echo base_url();?>css/style-timSAR.css" rel="stylesheet">
   <!--  <link href="<?php echo base_url();?>css/sb-admin.css" rel="stylesheet"> -->


  </head>

  <body>        
      <div id="back">
           <div class="backRight"></div>
           <div class="backLeft"></div>
         </div>
         <div id="slideBox">
           <div class="topLayer">
             <div class="left">
               <div class="content">
                 <h2>Sign Up</h2>
                 <br>
                 <form action="registersar.php" method="POST"  enctype="multipart/form-data"> 
                  <input type="text" name="level" id="level" value="sar" hidden >
                   <div class="form-group">
                     <input type="text" class="form-control" id="nama" name="nama" required placeholder="Nama Lengkap" style="width : 300px" />
                   </div>
                   <div class="form-group">
                     <input type="text" class="form-control" id="nik" name="nik" required placeholder="NIK" style="width : 300px" />
                   </div>
                   <div class="form-group">
                     <input type="text" class="form-control" id="username" name="username" required placeholder="Username" style="width : 300px" />
                   </div>
                   <div class="form-group">
                     <input type="email" class="form-control" id="email" name="email" required placeholder="Email" style="width : 300px" />
                   </div>
                   <div class="form-group">
                     <input type="password" class="form-control" id="password" name="password" required placeholder="Password" style="width : 300px" /> 
                   </div>
                   <div class="form-group">
                     <input type="file"  id="avatar" name="avatar" accept="image/x-png,image/gif,image/jpeg" style="width : 300px" />
                   </div>
                   <br>
                   <div class="custom-control custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                      <label class="custom-control-label" for="customControlValidation1">Data yang saya isi adalah benar</label>
                      <div class="invalid-feedback">Data belum terisi</div>
                   </div>
                   <button id="goLeft" class="off">Login</button>
                   <button type="submit" class="btn btn-sm" data-toggle="modal" name="signup" >SIGN UP</button>
                  </form>

                 <div class="modal" id="myModal">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-body text-center" >
                          Register Success
                          <br>
                          <br>
                      </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              

              <div class="right">
                <div class="content">
                   <br>
                  <br>
                  <h2>Login</h2>
                  <br>
                  <form action="<?php echo site_url('login/ceklogin')?>" method="POST">
                     <div class="form-group">
                      <div class="form-group">
                        <input type="text" name="lvl" id="lvl" value="sar" hidden >
                        <input type="text" name="user" class="form-control" placeholder="Username" style="width : 300px" required="" />
                      </div>
                
                      <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Password" style="width : 300px" required=""/> 
                      </div>
                      <br>
                        <button type="submit" class="btn btn-sm" data-toggle="modal" name="login">Login</button>
                        <button id="goRight" name="goRight" class="off">Signup</button>
                        <br>                        
                              <?php if(isset($pesan)){
                              echo $pesan;
                            }?>
                          </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>    

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script  src="<?php echo base_url();?>js/index.js"></script>
    <script type="text/javascript">
      document.addEventListener('invalid', (function () {
      return function (e) {
        e.preventDefault();
        document.getElementById("user").focus();
      };
    })(), true);
    </script>

  </body>
</html>
