<?php
session_start();
require_once("../model/Usuario.php"); // acceder al usuario.php

if (isset($_SESSION["usuario"])) {
    header("Location: index.php"); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // comprobamos campos no esten vacios
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        // guardamos lo que escribimos
        $email = $_POST["email"];
        $pass = hash("sha256",$_POST["password"]);
    }

    // añadir funcion comprobar existe usuario
    $usuario = GestionUsuario::comprobarUsuario($email, $pass);
    if ($usuario) {
        $_SESSION["usuario"] = $usuario;
        header("Location: index.php");
        exit;
    }else{
        echo "<div class='alert alert-danger'>Usuario o contraseña incorrectos</div>";
    }
}else{
    echo "<div class='alert alert-danger'>Faltan datos por rellenar</div>";
}

?>