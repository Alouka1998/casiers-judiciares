
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Casier Judiciaire | Liste des casiers</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="icon" type="image/png" href="<?php echo base_url();  ?>logo_casier.png"/>
  <link rel="stylesheet" href="<?php echo base_url();  ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();  ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();  ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();  ?>dist/css/adminlte.min.css">
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
             <div class="card-header">Rechercher un casier</div>
              <div class="card-body ">
          <form enctype="multipart/form-data" action="<?=base_url('index.php/main/loadsearch/')?>" class="checkout" method="post" name="checkout">
            <div class="formSearch">
            <div class="searchLeft">
              <div class="searchLeft1">
              <input type="number" name="num_acte" placeholder="Numero acte" class="form-control" required="">
            </div>
            <div class="searchLeft2">
                <input type="date" name="date_acte" placeholder="Année" class="form-control" required="">
            </div>
            </div>
            <div class="searchRight">
              <div class="searchRight1">
                <input type="text" name="centre" placeholder="Centre" class="form-control" required="">
              </div>
              <div class="searchRight2">
                <button type="submit" class="btn btn-primary ">Rechercher</button>
              </div>
            </div>
            
          </div>   
          </form>
          <h6 style="text-align: center;"><?php echo $this->session->flashdata('info'); ?></h6>
          <?php  

           if(!empty($casier)) { ?>
             
             <table id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr style="background: #007BFF;color:white">
                  <th>Numéro acte</th>
                  <th>concernant</th>
                  <th>Date naissance</th>
                  <th>lieu</th>
                  <th>Crime ou delit</th>
                   <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 
                   <tr>
                     <td><?=$casier->num_acte?></td>
                     <td><?=$casier->full_name?></td>
                      <td><?=date("d/m/Y ",strtotime($casier->date_birth))?></td>
                      <td><?=$casier->house?></td>
                      <td><?=$casier->nature_crime?></td>
                     <td> <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                  <i class="fa fa-eye"></i>
                </button><i style="margin-left: 20px;color: green" class="fa fa-edit"></i></td>
                   </tr>

                
               
                </tbody>
                <tfoot>
                <tr>
                   <th>Numéro acte</th>
                  <th>concernant</th>
                  <th>Date naissance</th>
                  <th>lieu</th>
                  <th>profession</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
              </div>
        <?php   }?>
        <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
           
            <div class="modal-body">
  
  <div class="body">
    <div style="float: right;margin-top:0;padding-top: 0;">REPUBLIQUE DU MALI</div><br>
    <div style="float: right;margin-top:0;padding-top: 0;">un peuple-un but-une foi</div>
   
    <div>COUR D'APPEL DE BAMAKO</div>
    <div>TRIBUNAL DE GRANDE INSTANCE DE</div>
    <div>N°:.........</div>
    
   
  
   
    <div style="text-align: center;"><h2><strong>BULLETIN N° </strong></h2></div>
      <div style="text-align: center;"><h2><strong>RELEVE DE BULLETIN N°1 </strong></h2></div>
  

    <div>
      Coût: 750 F CFA<br>
      Droit de Timbre<br>
      Payé en compte<br>
      avec le trésor<br>
    </div><br>
    

    <table class="table table-bordered table-striped table-sm">
      <thead>
        <tr>
          <th>Concernant 1 nommée(e)</th>
          <td><?=$casier->full_name?></td>
        </tr>
        <tr>
          <th>Fils de</th>
          <td><?=$casier->father_name?></td>
        </tr>
         <tr>
          <th>Et de</th>
          <td><?=$casier->mother_name?></td>
        </tr>
         <tr>
          <th>Né(e) le ou vers</th>
          <td><?=date("d/m/Y ",strtotime($casier->date_birth))?></td>
        </tr>
         <tr>
          <th>A</th>
          <td><?=$casier->place_birth?></td>
        </tr>
         <tr>
          <th>Domicile</th>
          <td><?=$casier->house?></td>
        </tr>
         <tr>
          <th>Profession</th>
          <td><?=$casier->profession?></td>
        </tr>
         <tr>
          <th>Situation de Famille</th>
          <td><?=$casier->family_situation?></td>
        </tr>
         <tr>
          <th>Nationalité</th>
          <td>MALIENNE</td>
        </tr>
      </thead>
    </table>
   
    <div class="table-responsive">
    <table class="table table-bordered table-striped table-sm">
      <thead>
        <tr>
        <th>DATE CONDAMNATION</th>
        <th>JURIDICTION</th>
        <th>DATE CRIME OU DELIT</th>
        <th>NATURE CRIME OU DELIT</th>
        <th>DATE MANDAT DEPOT</th>
        <th>PEINE</th>
        <th>OBSERVATION</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?=date("d/m/Y ",strtotime($casier->date_condam))?>  </td>
          <td> <?=$casier->juridiction?> </td>
          <td> <?=date("d/m/Y ",strtotime($casier->date_crime))?> </td>
           <td> <?=$casier->nature_crime?>  </td>
          <td> <?=date("d/m/Y",strtotime($casier->date_mandat))?> </td>
          <td>  <?=$casier->peine?></td>
         
          <td>Suivant copie d'acte <br> 
            de naissance N° <div class="numero_acte"> <?=$casier->num_acte?>  </div><br> 
          de l'année <div class="annee"> <?= date("Y",strtotime($casier->date_birth)) ?> </div> <br>
        du centre de <div class="centre"> <?=$casier->place_birth?> </div></td>
        </tr>
      </tbody>
    </table>
    </div>
    <div style="text-align: center;float: left;" >
    <label>Vu au Parquet</label><br>
    <label>LE PROCUREUR DE LA REPUBLIQUE</label>
    </div>
    <div style="text-align: center;float: right;">
    <label>POUR EXTRAIT CONFORME</label><br>
    <label>Bamako, le <?=date("d/m/Y",strtotime(date('y-m-d')))?></label> <div class="date_etablie">  </div><br>
    <label>LE GREFFIER EN CHEF</label>
    </div>
    </div>
  </div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Femer</button>
              <button type="button" onclick="window.print()" class="btn btn-primary">Imprimer</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
       
      </div>
             <style>
              .formSearch{
                display: inline-block;
                width: 100%;
                }
                .searchLeft{
                  display: inline-block;
                  float: left;
                  width: 48%;
                }
                .searchLeft1{
                  float: left;
                  width: 48%;
                }
                .searchLeft2{
                  float: right;
                  width: 48%;
                }
                .searchRight{
                  display: inline-block;
                  float: right;
                  width: 48%;
                }
                .searchRight1{
                    float: left;
                    width: 48%;
                }
                .searchRight2{
                  float: right;
                  width: 48%;
                }

            </style>
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
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();  ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();  ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();  ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();  ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();  ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();  ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();  ?>dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

