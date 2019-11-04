<?php

	include 'conexion.php';
	$serie=$_POST['serie'];
	$protocolo=$_POST['protocolo'];

	//INSERT INTO `producto`(`codigo`, `producto`, `precio`, `fabricante`) VALUES ('as','as',1.1,'as')
	//$consulta = "INSERT INTO `producto`(`codigo`, `producto`, `precio`, `fabricante`) VALUES ('$codigo','$producto',$precio,'$fabricante')";
    $consulta = "INSERT INTO `beacon`(`Serie`, `Protocolo`) VALUES ('$serie','$protocolo')";
    //echo $consulta;
	mysqli_query($conexion,$consulta) or die (mysqli_error());
	mysqli_close($conexion);
	
?>