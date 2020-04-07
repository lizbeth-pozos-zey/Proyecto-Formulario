<?php
	include "conexionprueba.php";

	EliminarMaestro($_GET['matricula']);

	function EliminarMaestro($matricula)
	{
		$sentencia="DELETE FROM datos4 WHERE matricula='".$matricula."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Dato Eliminado exitosamente");
	window.location.href='bd-maestro.php';
</script>