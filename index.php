<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php
        $con = mysqli_connect ("localhost","root","","formulario") or die ("Error Conexion"); 
    ?>
    <title>Login</title>
</head>

<body>
    <div class="login">

        <form method="post" action="index.php">

            <h2>Login</h2>

            <div class="usuario">
                <input type="text" required="required" name="nombre">
                <label>Nombre</label>
                <i></i>
            </div>
            <div class="usuario">
                <input type="password" required="required" name="pass">
                <label>Contraseña</label>
                <i></i>
            </div>
            <div class="usuario">
                <input type="email" required="required" name="email">
                <label>Email</label>
                <i></i>
            </div>
            <a>
                <input type="submit" name="insert" value="Insertar Datos" class="boton">
            </a>
        </form>
    </div>
    <?php 
        if(isset($_POST['insert'])){
            $usuario=$_POST['nombre'];
            $pass=$_POST['pass'];
            $email=$_POST['email'];
            $insert="INSERT INTO usuarios(usuario,password,email) values ('$usuario','$pass','$email')";
            $ejecutar=mysqli_query ($con, $insert);
            if($ejecutar){
                echo "<script>alert('Usuario insertado exitosamente');</script>";
            }
        }
    ?>
</body>

</html>