
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Casier | faire une demande</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="<?php echo base_url();  ?>logo_casier.png"/>
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
      <p class="login-box-msg">Faire une demande de casier judiciaire</p>
      <div class="error alert-error">
      <h6 ><?php echo $this->session->flashdata('error'); ?></h6> </div>

      <form enctype="multipart/form-data" action="<?=base_url('index.php/main/savedo/')?>" class="checkout" method="post" name="checkout">
        <div class="input-group mb-3">
          <input type="number" name="num_acte" required="" class="form-control" placeholder="Numéro de l'acte">
          <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="date" name="date_acte" required="" class="form-control" placeholder="Date de naissance">
          <div class="input-group-append">
            <div class="input-group-text">
            
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="centre" required="" class="form-control" placeholder="centre de naissance">
          <div class="input-group-append">
            <div class="input-group-text">
            
            </div>
          </div>
        </div>
        <p>Somme 750 FCFA</p>
        <div class="input-group mb-3">
        	<label>Payer par</label>
         <select class="form-control" name="buy" required="">
         	<option value="">---Choisir---</option>
         	<option value="Orange money">Orange money</option>
         	<option value="Mobi Cash">Mobi Cash</option>
         	<option value="Sama money">Sama money</option>
         </select>
          <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
        </div>
         <div class="input-group mb-3">
         	<label>Mode de reception</label>
           <select class="form-control" name="mode">
         	<option value="Email">Email</option>
         	<option value="Whatsapp">Whatsapp</option>
         </select>
          <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-sm-12">
            <button type="submit" style="margin-top : 20px;" class="btn btn-primary btn-block">Envoyer</button></div><br>
      

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
