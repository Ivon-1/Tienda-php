<?php
require_once("../public/registro.php");
require_once("../model/Usuario.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") { // SI EL METODO DEL FORMULARIO ES POST
    if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        // almacenamos en variables
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $pass = hash("sha256", $_POST["password"]);
        $rol_id = 3; // rol siempre es administrador
        // comprobacion del correo para ver si existe
        $comprobar = GestionUsuario::comprobarCorreo($email);
        // si esta vacio insertas y sino mensaje error -- el correo ya existe
        if ($comprobar == null) {
            $insertarResultado = GestionUsuario::insertarUsuario($nombre, $email, $pass, $rol_id);
            if ($insertarResultado) {
                echo "<div class='alert alert-success'>Usuario agregado con éxito</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>El correo ya existe</div>";
        }
    }else{
        echo "<div class='alert alert-danger'>Faltan datos por rellenar</div>";
    }
}
