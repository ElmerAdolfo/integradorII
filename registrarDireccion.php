<?php

	include 'conexion.php';
	$descripcion=$_POST['descripcion'];
	$audioDireccion=$_POST['audioDireccion'];

    $consulta = "INSERT INTO `direccion`(`DescripcionDireccion`, `AudioDireccion`) VALUES ('$descripcion','$audioDireccion')"
    //echo $consulta;
	mysqli_query($conexion,$consulta) or die (mysqli_error());
	mysqli_close($conexion);
	
?>