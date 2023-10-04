<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/css/all.min.css">
</head>
<?php
session_start();
if(!empty($_SESSION["tipo"])){
    header('Location: ../controlador/loginController.php');
}
else{
    session_destroy();
?>
<body>
    <div class="contenedor">
        <div class="img">
            <img src="../img/login3.png" alt="">
        </div>
        <div class="contenido-login">
            <form action="../controlador/loginController.php" method="post">
                <img src="../img/login4.png" alt="">
                <h2>Inventario</h2>
                <div class="input-div user">
                    <div class="i">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    </div>
                    <div class="div">
                        <h5>Usuario</h5>
                        <input type="text" name="user" class="input" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">

                        <i class="fas fa-user-lock    "></i>
                    </div>
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" name="pass" class="input" required>
                    </div>
                </div>
                
                <input type="submit" class="btn" value="Iniciar Sesión">
            </form>

        </div>
    </div>
</body>
<script src="../js/login.js"></script>
</html>
<?php
}
?>