<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Casier Judiciaire | Ajout de casier </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="<?php echo base_url();  ?>logo_casier.png"/>
  <link rel="stylesheet" href="<?php echo base_url();  ?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();  ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();  ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();  ?>plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();  ?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url();  ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?php echo base_url();  ?>plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url();  ?>plugins/summernote/summernote-bs4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Casier Judiciaire</a>
      </li>
    </ul>
  </nav>
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
     <img src="<?php echo base_url();  ?>logo_casier.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
      <span class="brand-text font-weight-light">CASIERS JUDICIAIRE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();  ?>index.php/main/welcome" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Accueil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();  ?>index.php/main/addcasierView" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un casier</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="<?php echo base_url();  ?>index.php/main/search" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chercher un casier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();  ?>index.php/main/listcasier" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste des casiers</p>
                </a>
              </li>
            </ul>

          </li>
                    <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Tribunal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();  ?>index.php/main/addcourt" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();  ?>index.php/main/listcourt" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste</p>
                </a>
            </ul>
            
          </li>
           <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Utilisateurs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();  ?>index.php/main/adduser" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();  ?>index.php/main/listuser" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste</p>
                </a></li>
                 <li class="nav-item">
                <a href="<?php echo base_url();  ?>index.php/main/logout" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deconnection</p>
                </a></li>
            </ul>
            
          </li>

     
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <section class="col-lg-12 connectedSortable">
          <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Formulaire d'insersion de casier</h3>
          </div>
           <form enctype="multipart/form-data" action="<?=base_url('index.php/main/addcasier/')?>" class="checkout" method="post" name="checkout">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nom et Prénom : </label>
                  <input type="text" name="nom_prenom" required="" class="form-control">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label>Numéro acte : </label>
                  <input type="number" name="num_acte" required="" class="form-control">
                </div>
               
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Date de Naissance : </label>
                  <input type="Date" name="date_naissance" required="" class="form-control">
                </div>
                  </div>
                 <div class="col-md-6">
                <div class="form-group">
                  <label>Lieu de Naissance : </label>
                  <input type="text" name="lieu" required="" class="form-control">
                </div>
              </div>
            
               <div class="col-md-6">
               <div class="form-group">
                  <label>Père : </label>
                  <input type="text" name="pere" required="" class="form-control">
                </div>
              </div>
            
          
              <div class="col-md-6">
                <div class="form-group">
                  <label>Mère : </label>
                 <input type="text" name="mere" required="" class="form-control">
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Domicile : </label>
                  <input type="text" name="domicile" required="" class="form-control">
                </div>
              </div>
           
            
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Profession : </label>
                 <input type="text" name="profession" required="" class="form-control">
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Situation de Famille : </label>
                  <input type="text" name="situation_famille" required="" class="form-control">
                </div>
              </div>
           
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Date Condamnation : </label>
                 <input type="Date" name="date_condam"  class="form-control">
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Juridiction : </label>
                  <input type="text" name="juridiction" required="" class="form-control">
                </div>
              </div>
            
              <div class=" col-md-6">
                <div class="form-group">
                  <label>Date Crime ou Delit : </label>
                 <input type="Date" name="date_crime"  class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nature Crime ou Delit : </label>
                  <input type="text" name="nature_crime" required="" class="form-control">
                </div>
              </div>
    
              <div class="col-md-6">
                <div class="form-group">
                  <label>Date Mandat Dépôt : </label>
                 <input type="Date" name="date_mandat"  class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Peine (mois) : </label>
                  <input type="number" name="peine"  class="form-control">
                </div>
              </div>
            </div>
           <button type="submit" class="btn btn-primary btn-block">Valider</button>
          </div>
          <div class="card-footer">
          </div>
        </div>   
          </section>
          <section class="col-lg-5 connectedSortable">
          </section>
        </div>
      </div>
    </section>
  </div>
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 Casier judiciaire.</strong>
    Tous les droits reservés.
  </footer>
  <aside class="control-sidebar control-sidebar-dark">  
  </aside>
</div>
<script src="<?php echo base_url();  ?>plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();  ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?php echo base_url();  ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();  ?>plugins/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url();  ?>plugins/sparklines/sparkline.js"></script>
<script src="<?php echo base_url();  ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url();  ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="<?php echo base_url();  ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="<?php echo base_url();  ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url();  ?>plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url();  ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?php echo base_url();  ?>plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?php echo base_url();  ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo base_url();  ?>dist/js/adminlte.js"></script>
<script src="<?php echo base_url();  ?>dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url();  ?>dist/js/demo.js"></script>
</body>
</html>
