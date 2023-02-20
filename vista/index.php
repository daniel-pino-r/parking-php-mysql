<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Parqueadero</title>
</head>
<body>
 <section class="principal">
    <form action="../controlador/validacion.php" method="post" name="loggin">
            <div class="login">
                <span class="text-center">Ingresar</span>
                <div class="input-container">
                    <input type="text" name="user" required/>
                    <label>Usuario</label>		
                </div>
                <div class="input-container">		
                    <input type="password" name="password" required/>
                    <label>Contraseña</label>
                </div>
                    <input type="submit" value="Ingresar" class="btn">
            </div>  
        </form>    
 </section>
</body>
</html>