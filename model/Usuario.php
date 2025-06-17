<?php

require_once("env.php");
require_once("BaseDatos.php");

class GestionUsuario
{
    // metodo para insertar usuario
    public static function insertarUsuario($nombre, $email, $password, $rol_id, $type_fetch = PDO::FETCH_OBJ)
    {
        $stmt = BaseDatos::getConection()->prepare("INSERT INTO usuarios (`nombre`, `email`, `password`, `rol_id`) 
        VALUES (:nombre, :email, :pass, :id_rol)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam('email', $email);
        $stmt->bindParam(':pass', $password);
        $stmt->bindParam(":id_rol", $rol_id);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

    /**
     * funcion que nos devuelve todos los usuarios
     */
    public static function getAllUsuarios($type_fetch = PDO::FETCH_OBJ)
    {
        $stmt = BaseDatos::getConection()->prepare("Select * from usuarios");
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

    // funcion que nos comprueba si un email ya esta registrado
    public static function comprobarCorreo($email, $type_fetch = PDO::FETCH_OBJ){
        $stmt = BaseDatos::getConection()->prepare("SELECT * FROM tienda.usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

    // funcion que nos comprueba si un usuario esta registrado
    public static function comprobarUsuario($email, $password, $type_fetch = PDO::FETCH_OBJ){
        $stmt = BaseDatos::getConection()->prepare("SELECT * FROM usuarios where email = :email and password = :pass");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pass', $password);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

    // funcion para eliminar usuario por id
    public static function eliminarUsuario($id, $type_fetch = PDO::FETCH_OBJ){
        $stmt = BaseDatos::getConection()->prepare("DELETE FROM usuarios WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

}
