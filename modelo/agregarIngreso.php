<?php
    
    if($_POST){
    session_start();
    require_once("../controlador/conexion.php");       
    $conn = OpenCon(); 

    $vehiculo= $_POST['transporte'];
    $puesto = $_POST['lugar'];
    $fecha = $_POST['fecha'];
    $disponibilidad = "ocupado";

    $query = "UPDATE registro SET datetime_registro='$fecha', lugar_registro='$puesto', id_vehiculos ='$vehiculo', disponibilidad='$disponibilidad' WHERE lugar_registro ='$puesto'";

    $result=mysqli_query($conn, $query);

    if (($result = mysqli_query($conn, $query)) === false) {
        die(mysqli_error($conn));
    }else
        header("location:../vista/home.php");
    }

?>