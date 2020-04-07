<?php

  include('conexionprueba.php');

	EliminarProducto($_GET['matricula']);

	function eliminarAlumno($matricula)
	{
		$sentencia="DELETE FROM datos WHERE matricula='".$nik."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Dato Eliminado exitosamente");
	window.location.href='bd-alumno.php';
</script>