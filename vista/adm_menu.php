<?php
session_start();
if($_SESSION['tipo']==1){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <h1>Menu Principal</h1>
    <a href="../controlador/closesesion.php">Cerrar Sesion</a>
</body>
</html>
<?php
}
else{
    header('Location: ../vista/login.php');
}
?>