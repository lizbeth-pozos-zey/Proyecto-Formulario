<?php
	include "conexionprueba.php";

	EliminarMateria($_GET['clave']);

	function EliminarMateria($clave)
	{
		$sentencia="DELETE FROM datos5 WHERE clave='".$clave."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Dato Eliminado exitosamente");
	window.location.href='bd-materia.php';
</script>