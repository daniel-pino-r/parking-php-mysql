<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    
    <title>Parqueadero</title>
</head>
<body>

<a href="../vista/index.php"><input class="close" type="button" value="Cerrar sesion"></a>
    <section class="principal">
      <h1 class="titulo">Parqueadero</h1>

        <div class="cards">

        <div class="card">
            <form action="../modelo/agregarVehiculo.php" method="post" >
                <h2>Ingresar Vehiculo</h2>
                            <div class="input-container">		
                                <input type="text" name="placa" required/>
                                <label>Placa</label>
                            </div>
                            <select name="tipo" id="tipo">
                                <option value="">Tipo:</option>
                                <option value="carro">Carro</option>
                                <option value="moto">Moto</option>
                            </select>

                            <input type="submit" value="Insertar" class="btn"/>                 
                </form>   
            </div>

            <div class="card">
             <form action="../modelo/agregarIngreso.php" method="post" name="ingreso">
                <h2>Ingreso</h2>
            
                <select name="transporte" class="vehiculos">
                        <option value="0">Vehiculos:</option>
                        <?php
                            require_once("../controlador/conexion.php");       
                            $conn = OpenCon(); 
                            $consulta=mysqli_query($conn, "SELECT * FROM vehiculos");
                
                        while ($fila=mysqli_fetch_array($consulta)) {

                            echo '<option value="'.$fila["id_vehiculos"].'">'.$fila["tipo_vehiculos"].' - '.$fila["placa_vehiculos"].'</option>';
                        
                        }
                        CloseCon($conn);
                        ?>
                </select>

                <select name="lugar">
                        <option value="0">Puesto:</option>
                        <?php
                            require_once("../controlador/conexion.php");       
                            $conn = OpenCon(); 
                            $consulta=mysqli_query($conn, "SELECT * FROM ingreso WHERE disponibilidad = 'disponible'");
                
                        while ($fila=mysqli_fetch_array($consulta)) {

                            echo '<option value="'.$fila["lugar_ingreso"].'">'.$fila["lugar_ingreso"].' - '.$fila["disponibilidad"].'</option>';
                        
                        }
                        CloseCon($conn);
                        
                        ?>
                </select>
                            
                        <div>
                            <input type="datetime-local" class="date" name="fecha" id="" required pattern="\d{4}-\d{2}-\d{2}">
                        </div>
                        <input type="submit" value="Insertar" class="btn">
                </form>    
            </div>


            <div class="card">
                <form action="../modelo/agregarSalida.php" method="post" name="salida">
                <h2>Salida</h2>
                             <select name="transporte" >
                                    <option value="0">Vehiculos:</option>
                                    <?php
                                        require_once("../controlador/conexion.php");       
                                        $conn = OpenCon(); 
                                        $consulta=mysqli_query($conn, "SELECT * FROM ingreso WHERE disponibilidad = 'ocupado'");
                            
                                    while ($fila=mysqli_fetch_array($consulta)) {
                                        echo '<option value="'.$fila["id_vehiculos"].'">'.$fila["id_vehiculos"].' </option>';
                                    
                                    }
                                    CloseCon($conn);
                                    ?>
                            </select> 
                            <input type="datetime-local" class="date" name="fecha" id="" required pattern="\d{4}-\d{2}-\d{2}">
                            <input type="submit" value="Insertar" class="btn">                 
                </form>   
            </div>



        </div>
        </div>

        <div class="puestos">
             <h2>Puestos parqueadero</h2>
            <div>        
                <div class="container">
                    <div class="keys">
                        <?php
                            require_once("../controlador/conexion.php");       
                            $conn = OpenCon(); 
                            $consulta=mysqli_query($conn, "SELECT * FROM ingreso");

                            while ($fila=mysqli_fetch_array($consulta)) {                   
                                echo "<button class='".$fila["disponibilidad"]."'>".$fila["lugar_ingreso"]."</button>";
                            }
                            CloseCon($conn);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>