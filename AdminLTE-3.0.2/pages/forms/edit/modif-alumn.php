<?php
  include 'conexionprueba.php';

  $consulta=ConsultarMatricula($_GET['matricula']);

  function ConsultarMatricula($matricula)
  {
    $sentencia="SELECT * FROM datos WHERE matricula='".$matricula."' ";
    $resultado=mysql_query($sentencia) or die (mysql_error());
    $filas=mysql_fetch_assoc($resultado);
    return [
      $filas['matricula'],
      $filas['nombre'],
      $filas['correo']
      $filas['telefono']
    ];
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar alumno</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="todo">
  
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Editar alumno</h1> </span>
  		<br>
	  <form action="modif-alumn2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden" name="datos" value="<?php echo $_GET['datos']?> ">
  		<label>Matricula: </label>
  		<input type="text" id="matricula" name="matricula"; value="<?php echo $consulta[0] ?>" ><br>
  		
  		<label>Nombre: </label>
  		<input type="text" id="nombre" name="nombre" value="<?php echo $consulta[1] ?>"><br>
  		
  		<label>Correo: </label>
  		<input type="text" id="correo" name="correo" value="<?php echo $consulta[2] ?>"><br>

      <label>Telefono: </label>
      <input type="text" id="telefono" name="telefono" value="<?php echo $consulta[3] ?>"><br>
  		
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>
</div>
</body>
</html>