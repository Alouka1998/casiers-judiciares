
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Casier Judiciaire | Liste des utilisateus</title>
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
 
    
     
    

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Casiers judiciaire</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Les casiers</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
        
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des utilisateurs</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-sm" >
                <thead>
                <tr style="background: #007BFF;color:white">
                  <th>Prenom</th>
                  <th>Nom</th>
                  <th>Service</th>
                  <th>Adresse</th>
                  
                   <th>Tel</th>
                   <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($users as $user ) { ?>
                   <tr>
                     <td><?=$user->first_name?></td>
                     <td><?=$user->last_name?></td>
                      <td><?=$user->service?></td>
                      <td><?=$user->adress?></td>
                     
                      <td><?=$user->phone?></td>
                     <td> <i style="margin-left: 20px;color: green" class="fa fa-edit"></i></td>
                   </tr>

                  <?php } ?>
               
                </tbody>
                <tfoot>
                <tr>
                  <th>Nom</th>
                  <th>Region</th>
                  <th>Commmune</th>
                  <th>Adresse</th>
                  <th>Email</th>
                   <th>Tel</th>
                  
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
           
            <div class="modal-body">
            
  <style>
    *{
      margin: 0px;
      padding: 0px;
    }
    .body{
      width: 750px;
    }
    .bulletin{

    }
    .bullHead{
      display: inline-block;
      width: 100%;
    }
    .bullHead1{
      float: left;
      width: 50%;
    }
    .bullHead2{
      float: right;
      width: 50%;
      text-align: right;
    }
    .Titre{
      width: 100%;
      text-align: center;
      color: red;
      text-transform: uppercase;
    }
    #bullCout{
      width: 100%;
      text-align: left;
    }
    .bullInfoPerso{
      display: inline-block;
      width: 100%;
    }
    .bullInfoPerso1{
      float: left;
      width: 40%;
    }
    .bullInfoPerso2{
      float: right;
      width: 60%;
    }
    table{
      border: 2px solid black;
    }
    thead, tbody, th, td{
      border: 1px solid black
    }
    .bullFooter{
      display: inline-block;
      width: 100%;
    }
    .bullFooter1{
      float: left;
      width: 50%;
      text-align: center;
    }
    .bullFooter2{
      float: right;
      width: 50%;
      text-align: center;
    }
    .concernent{
      border-bottom: 1px solid black;     
    }
    .pere{
      border-bottom: 1px solid black;
    }
    .mere{
      border-bottom: 1px solid black;
    }
    .date_naissance{
      border-bottom: 1px solid black;
    }
    .lieu{
      border-bottom: 1px solid black;
    }
    .domicile{
      border-bottom: 1px solid black;
    }
    .profession{
      border-bottom: 1px solid black;
    }
    .situation_famille{
      border-bottom: 1px solid black;
    }

  </style>
  <div class="body">
  <div class="bulletin">
    <div class="bullHead">
    <div class="bullHead1">
    <label>COUR D'APPEL DE BAMAKO</label><br>
    <label>TRIBUNAL DE GRANDE INSTANCE DE</label><br><br>
    <label>N°:</label> <div class="numeroCasier"></div><br>
    </div>
    <div class="bullHead2">
    <label>REPUBLIAUE DU MALI</label><br>
    <label>un peuple-un but-une foi</label><br>
    </div>
    </div>
    <div class="Titre">
    <label id="bullTitre"><strong>BULLETIN N°3 <br><br>
      RELEVE DE BULLETIN N°1</strong> <br>
    </label>
    </div>

    <label id="bullCout">
      Coût: 750 F CFA<br>
      Droit de Timbre<br>
      Payé en compte<br>
      avec le trésor<br>
    </label><br>
    <div class="bullInfoPerso">
    <div class="bullInfoPerso1">
    <label>Concernant 1 nommée(e) </label><br>
    <label>Fils de: </label> <br>
    <label>et de: </label><br>
    <label>Né(e) le ou vers: </label><br>
    <label>A </label><br>
    <label>Domicile: </label><br>
    <label>Profession: </label><br>
    <label>Situation de Famille: </label><br>
    <label>Nationalité: MALIENNE</label>
    </div>
    <div class="bullInfoPerso2">
      <div class="concernent"> . </div>
      <div class="pere"> . </div>
      <div class="mere"> . </div>
      <div class="date_naissance"> . </div>
      <div class="lieu"> . </div>
      <div class="domicile"> . </div>
      <div class="profession"> . </div>
      <div class="situation_famille"> .  </div>
    </div>
    </div>  
    <div class="tableau">
    <table>
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
          <td>  </td>
          <td>  </td>
          <td>  </td>
          <td>  </td>
          <td>  </td>
          <td>  </td>
          <td>Suivant copie d'acte <br> 
            de naissance N° <div class="numero_acte">  </div><br> 
          de l'année <div class="annee">  </div> <br>
        du centre de <div class="centre">  </div></td>
        </tr>
      </tbody>
    </table>
    </div>
    <div class="bullFooter">
    <div class="bullFooter1">
    <label>Vu au Parquet</label><br>
    <label>LE PROCUREUR DE LA REPUBLIQUE</label>
    </div>
    <div class="bullFooter2">
    <label>POUR EXTRAIT CONFORME</label><br>
    <label>Sikasso, le </label> <div class="date_etablie">  </div><br>
    <label>LE GREFFIER EN CHEF</label>
    </div>
    </div>
  </div>
  </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Femer</button>
              <button type="button" class="btn btn-primary">Imprimer</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
   
    <strong>Copyright &copy; 2020 Casier Judiciaire.</strong> Tous les droits reservés.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
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
