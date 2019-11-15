<?php

	include 'conexion.php';
	$CodDetalleAdicional=$_POST['CodDetalleAdicional'];
	$CodPuestoComercial=$_POST['CodPuestoComercial'];

	//INSERT INTO `producto`(`codigo`, `producto`, `precio`, `fabricante`) VALUES ('as','as',1.1,'as')
	//$consulta = "INSERT INTO `producto`(`codigo`, `producto`, `precio`, `fabricante`) VALUES ('$codigo','$producto',$precio,'$fabricante')";
    $consulta = "INSERT INTO `detalleadicional`(`CodDetalleAdicional`, `CodPuestoComercial`) VALUES ('$CodDetalleAdicional','$CodPuestoComercial')";
    //echo $consulta;
	mysqli_query($conexion,$consulta) or die (mysqli_error());
	mysqli_close($conexion);
	
?>