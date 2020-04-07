<?php
	include 'conexionprueba.php';

	ModificarProducto($_POST['grupo'], $_POST['nombre'],);

	function ModificarGrupo($grupo, $nombre )
	{
		$sentencia="UPDATE datos3 SET grupo='".$grupo."', nombre= '".$nombre."' WHERE grupo='".$grupo."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Dato Modificado exitosamente");
	window.location.href='bd-grupo.php';
</script>