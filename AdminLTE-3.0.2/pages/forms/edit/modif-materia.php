<?php
  include 'conexionprueba.php';

  $consulta=ConsultarMateria($_GET['clave']);

  function ConsultarMateria($clave)
  {
    $sentencia="SELECT * FROM datos5 WHERE clave='".$clave."' ";
    $resultado=mysql_query($sentencia) or die (mysql_error());
    $filas=mysql_fetch_assoc($resultado);
    return [
      $filas['clave'],
      $filas['nombre'],
    ];

  }


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Materia</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="todo">
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Materia</h1> </span>
  		<br>
	  <form action="modif-materia2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden" name="clave" value="<?php echo $_GET['clave']?> ">
  		<label>Clave de la materia: </label>
  		<input type="text" id="clave" name="clave"; value="<?php echo $consulta[0] ?>" ><br>
  		
  		<label>Nombre de la materia: </label>
  		<input type="text" id="nombre" name="nombre" value="<?php echo $consulta[1] ?>"><br>
  		
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>	
  </div>
</div>
</body>
</html>