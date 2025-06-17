<?php
require_once("BaseDatos.php");

class gestionStates
{



    /**
     * funcion para obtener todos los estados
     */
    public static function obtenerEstados($type_fetch = PDO::FETCH_OBJ){
        $stmt = BaseDatos::getConection()->prepare("select * from states");
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }
    /**
     * funcion pora obtener todos los estados de un pais
     */
    public static function obtenerEstadosPorPaisId($country_id, $type_fetch = PDO::FETCH_OBJ)
    {
        $stmt  = BaseDatos::getConection()->prepare("Select * from states where country_id = :country_id");
        $stmt->bindParam('country_id', $country_id);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

    /**
     * funcion para filtrar por el nombre del estado
     */
    public static function filtrarEstadoNombre($name, $type_fetch = PDO::FETCH_OBJ)
    {
        $stmt = BaseDatos::getConection()->prepare("select * from states where name = :name");
        $stmt->bindParam('name', $name);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

    /**
     * funcion para filtrar por codigo de pais
     */
    public static function filtrarCodigoPaisIso($iso2, $type_fetch = PDO::FETCH_OBJ)
    {
        $stmt = BaseDatos::getConection()->prepare("select * from states where iso2 = :iso2");
        $stmt->bindParam('iso2', $iso2);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

    /**
     * funcion para obtener estados por id
     */
    public static function obtenerEstadosPorId($id, $type_fetch = PDO::FETCH_OBJ)
    {
        $stmt  = BaseDatos::getConection()->prepare("Select * from states where id = :id");
        $stmt->bindParam('id', $id);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

    /**
     * funcion que devuelve todos los resultados
     */
    public static function obtenerTodosResultados($page, $limit, $type_fetch = PDO::FETCH_OBJ)
    {
        $offset = $page  * $limit; // calcular el offset       
        $stmt = BaseDatos::getConection()->prepare("select * from states LIMIT :offset ,:limit");
        $stmt->bindParam(":limit", $limit,  PDO::PARAM_INT);
        $stmt->bindParam(":offset", $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }
}
