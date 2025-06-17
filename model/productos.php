<?php 
require_once("BaseDatos.php");

class GestionProductos{
    // funcion para devolver todos los productos
    public static function obtenerTodosProductos($type_fetch = PDO::FETCH_OBJ){
        $stmt = BaseDatos::getConection()->prepare("select * from productos");
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

    // funcion para obtener todas las cateegorias
    public static function obtenerTodasCategorias($type_fetch = PDO::FETCH_OBJ){
        $stmt = BaseDatos::getConection()->prepare("select * from categorias");
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

    // funcion para obtener productos por categoria
    public static function obtenerProductosCategoria($categoria_id, $type_fetch = PDO::FETCH_OBJ){
        $stmt = BaseDatos::getConection()->prepare("select * from productos where categoria_id = :categoria_id");
        $stmt->bindParam(":categoria_id", $categoria_id);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }    

    /**
     * funcion para obtener productos por nombre
     */
    public static function obtenerProductoNombre($nombre, $type_fetch = PDO::FETCH_OBJ){
        $stmt = BaseDatos::getConection()->prepare("select * from productos where nombre like :nombre");
        $nombre = "%".$nombre."%";
        $stmt->bindParam(":nombre", $nombre);
        $stmt->execute();
        return $stmt->fetchAll($type_fetch);
    }

    /**
     * funcion para obtener productos por id
     */
    public static function obtenerProductoId($id, $type_fetch = PDO::FETCH_OBJ){
        $stmt = BaseDatos::getConection()->prepare("select * from productores where id = :id");
        $stmt->bindParm(":id", $id);
        $stmt->execute();
        return $stmt->fetch($type_fetch);
    }

    
}
?>