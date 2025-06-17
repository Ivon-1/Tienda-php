<?php

require_once("BaseDatos.php");

class gestionCarrito
{
    public function __construct()
    {
        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }
    }

    public function agregarProducto($id, $cantidad = 1)
    {
        if (isset($_SESSION['carrito'][$id])) {
            $_SESSION['carrito'][$id]['cantidad'] += $cantidad; // suma la cantidad
        } else {
            $producto = GestionProductos::obtenerProductoId($id);
        }
    }
}
