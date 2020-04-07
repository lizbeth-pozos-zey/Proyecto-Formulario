<?php
	include 'conexionprueba.php';

	ModificarAlumno($_POST['matricula'], $_POST['nombre'], $_POST['correo'], $_POST['telefono']);

	function ModificarAlumno($matricula, $nombre, $correo, $telefono)
	{
		$sentencia="UPDATE datos SET matricula='".$matricula."', nombre= '".$nombre."', correo='".$correo."', telefono='".$telefono."' WHERE matricula='".$matricula."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Dato Modificado exitosamente");
	window.location.href='bd-alumno.php';
</script>