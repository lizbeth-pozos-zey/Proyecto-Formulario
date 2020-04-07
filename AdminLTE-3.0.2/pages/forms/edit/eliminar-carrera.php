<?php
	include "conexionprueba.php";

	EliminarProducto($_GET['clave']);

	function EliminarCarrera($clave)
	{
		$sentencia="DELETE FROM datos2 WHERE clave='".$clave."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Dato Eliminado exitosamente");
	window.location.href='bd-carrera.php';
</script>