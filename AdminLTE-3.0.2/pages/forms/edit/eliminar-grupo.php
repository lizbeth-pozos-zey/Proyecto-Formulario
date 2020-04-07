<?php
	include "conexionprueba.php";

	EliminarGrupo($_GET['grupo']);

	function EliminarGrupo($grupo)
	{
		$sentencia="DELETE FROM datos3 WHERE grupo ='".$grupo."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Dato Eliminado exitosamente");
	window.location.href='bd-grupo.php';
</script>