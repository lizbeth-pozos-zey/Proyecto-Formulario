<?php
	include 'conexionprueba.php';

	ModificarProducto($_POST['clave'], $_POST['nombre'], );

	function ModificarCarrera($clave, $nombre )
	{
		$sentencia="UPDATE datos2 SET clave='".$clave."', nombre= '".$nombre."',  WHERE clave='".$clave."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Dato Modificado exitosamente");
	window.location.href='index.php';
</script>