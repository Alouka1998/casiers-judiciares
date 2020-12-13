
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Casier Judiciaire |  Authentification</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="icon" type="image/png" href="<?php echo base_url();  ?>logo_casier.png"/>
  <link rel="stylesheet" href="<?php echo base_url();  ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();  ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();  ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">

      <h2 style="text-align: center;">CASIER JUDICIAIRE</h2>
      <center><img src="<?php echo base_url();  ?>logo_casier.png" alt="User Avatar" class="img-size-50 mr-3 img-circle"></center>
      <div class="error alert-error">
      <h6 ><?php echo $this->session->flashdata('error'); ?></h6> </div>
      <h6 ><?php echo $this->session->flashdata('success'); ?></h6>

      <form enctype="multipart/form-data" action="<?=base_url('index.php/main/login/')?>" class="checkout" method="post" name="checkout">
        <div class="input-group mb-3">
          <input type="text" name="username" required="" class="form-control" placeholder="Nom d\'utilisateur">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" required="" class="form-control" placeholder="Mot de passe">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-sm-12">
            <button type="submit" style="margin-top : 20px;" class="btn btn-primary btn-block">Valider</button></div><br>
        <div class="col-sm-12">
          <a style="margin-top : 20px;" class="btn btn-success btn-block" href="<?=base_url('index.php/main/do/')?>">Faire une demande</a>
          
       </div>

          </div>
          <!-- /.col -->
        </div>
      </form>
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url();  ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();  ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();  ?>dist/js/adminlte.min.js"></script>

</body>
</html>
