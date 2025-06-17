<?php
require_once("BaseDatos.php");

class gestionCountries
{
    /*
    *   Funcion para obtener todos los paises
    */
    public static function obtenerCountries($type_fetch = PDO::FETCH_OBJ)
    {
        $stmt  = BaseDatos::getConection()->prepare("Select * from countries");
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

    /*
    *   Funcion para obtener un pais por id
    */
    public static function filtrarNombre($name, $type_fetch = PDO::FETCH_OBJ)
    {
        $stmt = BaseDatos::getConection()->prepare("select * from countries where name LIKE :name"); // revisar
        $name = "%" . $name . "%";
        $stmt->bindParam(":name", $name);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /*
    *   Funcion para obtener un pais por iso02
    */
    public static function filtrarIso02($iso2, $type_fetch = PDO::FETCH_OBJ)
    {
        $stmt = BaseDatos::getConection()->prepare("select * from countries where iso2 = :iso2");
        $stmt->bindParam(":iso2", $iso2);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

    /*
    *   Clase para obtener un pais por iso03
    */
    public static function filtrarIso03($iso3, $type_fetch = PDO::FETCH_OBJ)
    {
        $stmt = BaseDatos::getConection()->prepare("select * from countries where iso3 = :iso3");
        $stmt->bindParam(":iso3", $iso3);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

    /*
    *   Funcion para obtener un pais por iso03
    */
    public static function filtrarPorId($id, $type_fetch = PDO::FETCH_OBJ)
    {
        $stmt = BaseDatos::getConection()->prepare("select * from countries where id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

    /**
     * funcion que devuelve todos los resultados
     */
    public static function obtenerTodosResultados($page, $limit, $type_fetch = PDO::FETCH_OBJ)
    {
        $offset = $page  * $limit; // calcular el offset       
        $stmt = BaseDatos::getConection()->prepare("select * from countries LIMIT :offset ,:limit");
        $stmt->bindParam(":limit", $limit,  PDO::PARAM_INT);
        $stmt->bindParam(":offset", $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }
}
