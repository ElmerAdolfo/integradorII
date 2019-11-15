<?php

	include 'conexion.php';
	$CodUbicacion=$_POST['CodUbicacion'];
	$CodDireccion=$_POST['CodDireccion'];
	$CodDetalleAdicional=$_POST['CodDetalleAdicional'];
	$CodBeacon=$_POST['CodBeacon'];

    $consulta = "INSERT INTO `ubicacion`(`CodUbicacion`,`CodDireccion`, `CodDetalleAdicional`,`CodBeacon`) VALUES ('$CodUbicacion','$CodDireccion','$CodDetalleAdicional','$CodBeacon')"
    //echo $consulta;
	mysqli_query($conexion,$consulta) or die (mysqli_error());
	mysqli_close($conexion);
	
?>