<?php
    
    if($_POST){
    session_start();
    require_once("../controlador/conexion.php");       
    $conn = OpenCon(); 

    $vehiculo=$_POST['transporte'];
    $fecha=$_POST['fecha'];


    $query = "UPDATE registro SET datetime_registro='2022-11-22 00:00:00', id_vehiculos = NULL, disponibilidad='disponible' WHERE id_vehiculos ='$vehiculo'";
    $result=mysqli_query($conn, $query);

    $query = "INSERT INTO salida (id_salida, datetime_salida, id_vehiculos) VALUES (NULL, '$fecha', '$vehiculo')";
    $result=mysqli_query($conn, $query);

    if (($result = mysqli_query($conn, $query)) === false) {
        die(mysqli_error($conn));
    }else
         header("location:../vista/home.php");
    }

?>