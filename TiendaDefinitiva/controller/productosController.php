<?php require_once("../model/productos.php");

$productos = [];
if (isset($_GET['id_categoria'])) { // obtener productos por categoria
    $productos = GestionProductos::obtenerProductosCategoria($_GET['id_categoria']);
    foreach (GestionProductos::obtenerProductosCategoria($_GET['id_categoria']) as $key => $producto) {
        echo "<div class='card'>" .
            "<img>" . $producto->imagen . "</img>" .
            "<p>Nombre:" . $producto->nombre . "</p>" .
            "<p>Descripion: " . $producto->descripcion . "</p>" .
            "<p>Precio: " . $producto->precio . "</p>" .
            "<p>Stock: " . $producto->stock . "</p>" .
            "<p>Categoria ID: " . $producto->categoria_id . "</p>" .
            "<button>Añadir a carrito</button>" . "</div>";
    }
}else if(isset($_GET['nombre'])){  // obtener productos por nombre
    $productos = GestionProductos::obtenerProductoNombre($_GET['nombre']);
    foreach (GestionProductos::obtenerProductoNombre($_GET['nombre']) as $key => $producto) {
        echo "<div class='card'>" .
            "<img>" . $producto->imagen . "</img>" .
            "<p>Nombre:" . $producto->nombre . "</p>" .
            "<p>Descripion: " . $producto->descripcion . "</p>" .
            "<p>Precio: " . $producto->precio . "</p>" .
            "<p>Stock: " . $producto->stock . "</p>" .
            "<p>Categoria ID: " . $producto->categoria_id . "</p>" .
            "<button>Añadir a carrito</button>" . "</div>";
    }
    
}else{ // obtener productos
    $productos = GestionProductos::obtenerTodosProductos();
    foreach (GestionProductos::obtenerTodosProductos() as $key => $producto) {
        echo "<div class='card'>" .
            "<img>" . $producto->imagen . "</img>" .
            "<p>Nombre:" . $producto->nombre . "</p>" .
            "<p>Descripion: " . $producto->descripcion . "</p>" .
            "<p>Precio: " . $producto->precio . "</p>" .
            "<p>Stock: " . $producto->stock . "</p>" .
            "<p>Categoria ID: " . $producto->categoria_id . "</p>" .
            "<button>Añadir a carrito</button>" . "</div>";
    }
}

