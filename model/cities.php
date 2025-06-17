<?php
require_once("BaseDatos.php");

class gestionCitys
{

    /**
     * funcion para filtrar ciudad por estado
     */
    public static function filtrarCiudadStateId($id_state, $type_fetch = PDO::FETCH_OBJ)
    {
        $stmt = BaseDatos::getConection()->prepare("select * from cities where state_id = :state_id");
        $stmt->bindParam(':id_state', $id_state);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * funcion para filtrar por nombre de la ciudad
     */
    public static function filtrarCityNombre($name, $type_fetch = PDO::FETCH_OBJ)
    {
        $stmt = BaseDatos::getConection()->prepare("select * from cities where name = :name");
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * funcion para filtrar ciudad por id de pais
     */
    public static function filtrarCityCountryId($country_id, $type_fetch = PDO::FETCH_OBJ)
    {
        $stmt = BaseDatos::getConection()->prepare("select * from cities where country_id = :country_id");
        $stmt->bindParam(':country_id', $country_id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * funcion para filtrar ciudad por id de la ciudad
     */
    public static function filtrarCityId($id_city, $type_fetch = PDO::FETCH_OBJ)
    {
        $stmt = BaseDatos::getConection()->prepare("select * from cities where id = :id");
        $stmt->bindParam(':id', $id_city);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * funcion que devuelve todos los resultados
     */
    public static function obtenerTodosResultados($page, $limit, $type_fetch = PDO::FETCH_OBJ)
    {
        $offset = $page  * $limit; // calcular el offset       
        $stmt = BaseDatos::getConection()->prepare("select * from cities LIMIT :offset ,:limit");
        $stmt->bindParam(":limit", $limit,  PDO::PARAM_INT);
        $stmt->bindParam(":offset", $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }
}
