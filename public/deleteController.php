<?php
require_once("../model/Usuario.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];
    GestionUsuario::eliminarUsuario($id);
    header("Location: index.php");
}
?>