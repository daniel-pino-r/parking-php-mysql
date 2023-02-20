<?php

    if($_POST){
    session_start();
    require_once("../controlador/conexion.php");       
    $conn = OpenCon(); 

    $nombre = $_POST['user'];
    $password = $_POST['password'];
    
    $consulta = mysqli_query ($conn, "SELECT * FROM validar WHERE nombre_validar = '$nombre' AND contra_validar = '$password'");

    if(!$consulta){
        echo mysqli_error($mysqli);
    }else{
       
    }

    if($user = mysqli_fetch_assoc($consulta)) {

        header("location:../vista/home.php");
        CloseCon($conn);

    } else {

        header("location:../vista/index.php");
        CloseCon($conn);
        
    }
 
   }

?>