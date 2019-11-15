<?php
    include 'conexion.php';
    //conectar al servidor y conectar a la base de datos
    $con = mysqli_connect($hostname,$username,$password,$database) or die ("no ser puede conectar al servidor");

    $datos = Array();
    $consulta = "select * from direccion";
    $resultado = mysqli_query($con,$consulta);
    
    while($row = mysqli_fetch_object($resultado)){

        //array que almacena los datos
        $datos[] = $row;
    }
    
    //escuchando el resultado de json
    echo json_encode($datos);
    mysqli_close($con);
?>