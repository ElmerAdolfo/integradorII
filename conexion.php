<?php
	$hostname='localhost';
	$database='beacon';
	$username='root';
	$password='';

	$conexion=new mysqli($hostname,$username,$password,$database);
	if($conexion->connect_errno)
	{
		echo "error en la conexion";
	}

?>