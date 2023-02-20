<?php
    
    if($_POST){
    session_start();
    require_once("../controlador/conexion.php");       
    $conn = OpenCon(); 

    $tipo= $_POST['tipo'];
    $placa = $_POST['placa'];
    $nombre = $_POST['nombre'];

    $query = "INSERT INTO vehiculos (tipo_vehiculos, placa_vehiculos, nombre_vehiculos) 
    VALUES ('$tipo', '$placa', '$nombre')";

    $result=mysqli_query($conn, $query);

    if(!$result){
        die("Fallo al agregar vehiculo");
    }

    header("location:../vista/home.php");

    }

?>