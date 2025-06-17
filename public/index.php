<?php
//Siempre que vayamos a trabajar con sesiones (inicio de sesion por ejemplo), tenemos que ponerlo
session_start();
// si la sesion no existe al login
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../view/header.css"> <!-- estilos header-->
    <link rel="stylesheet" href="../view/body.css"> <!-- estilos body -->
    <link rel="stylesheet" href="../view/tablaUsuarios.css">
</head>

<body>
    <header>
        <?php require_once("../view/header.php") ?>
    </header>
    <!-- vista de la tabla usuarios -->
    <table style="border: 2px solid black;">
        <?php require_once("tablaUsuarios.php") ?>
    </table>
    
    <div>
        <!-- cuerpo de las card -->
        <?php require_once("../view/body.php") ?>
    </div>



</body>

</html>