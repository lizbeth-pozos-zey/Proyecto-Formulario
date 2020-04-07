<?php 
  include('conexionprueba.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Alumnos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a></li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a></li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a></li>
    </ul>
    <!--Formulario-->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
      <li class="nav-item dropdown">
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Inicio</span>
    </a>
  </aside>
    </section>
          </div>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Captura  de alumnos </h3>
            </div>
       <!--Se hace la consulta a la bd para eliminar datos de la tabla (falta agregar los botones/opciones de eliminar y modificar)-->
                  <?php 
                  if(isset($_GET['aksi']) == 'delete'){
                         $nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
                         $cek = mysqli_query($con, "SELECT * FROM datos WHERE matricula='$nik'");
                     if(mysqli_num_rows($cek) == 0){
                             echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
                                 }else{
                        $delete = mysqli_query($con, "DELETE FROM datos WHERE matricula='$nik'");
                          if($delete){
                              echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
                                          }else{
                               echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
          }    }   }
                   ?>
                   <!--Fin de la consulta-->

            <!-- /  Datos de tabla alumno-->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead><tr>
                  <th>MATRICULA</th>
                  <th>NOMBRE</th>
                  <th>CORREO</th>
                  <th>TELEFONO</th>
                   <th>ACCIONES</th>
                </tr></thead>
                  <!-- / consulta que muestra los datos de alumnos en la tabla-->
                    <?php 
                                               $sql = ("SELECT * FROM datos"); 
                                               $query = $connect -> prepare($sql); 
                                               $query -> execute(); 
                                               $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                                            
                           if($query -> rowCount() > 0)   { 
                           foreach($results as $result) { 
                           echo "<tr>
                           <td>".$result -> matricula."</td>
                           <td>".$result -> nombre."</td>
                           <td>".$result -> correo."</td>
                           <td>".$result -> telefono."</td>
                           <td>". '<a href= "edit/eliminar-alumnos.php"  class= "btn btn-primary" >Eliminar </a>'. '<a href="edit/modif-alumnos.php" class="btn btn-primary">Editar</a>'."</td> 
                           </tr>";
                           
                              }
                                            }
                         ?>
    </table>
 
 </div>
    </div>
               </div>
   </div>
       </section>
    </div>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0 
     </div>
     <strong>Sistema de control </strong> 
    </footer>
      <aside class="control-sidebar control-sidebar-dark"></aside>
</div>
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
<script src="../../dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
