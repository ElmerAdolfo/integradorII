<?php
	include 'conexion.php';
	$Nombre=$_POST['nombre'];
	$Rubro=$_POST['rubro'];
	$Ubicacion=$_POST['ubicacion'];
	$AudioTienda=$_POST['audioTienda'];

	$consulta = "INSERT INTO `puestocomercial`(`Nombre`, `Rubro`, `UbicacionPuesto`, `AudioTienda`) VALUES ('$Nombre','$Rubro','$Ubicacion','$AudioTienda')";
	echo $consulta;
	mysqli_query($conexion, $consulta) or die (mysqli_error());
	mysqli_close($conexion);
	
?>