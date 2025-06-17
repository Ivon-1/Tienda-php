<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda en Línea</title>
</head>

<body>
    <header>
        <div class="container">
            <div class= "logo">
                <a href="#">Tienda Iván Álvarez</a>
            </div>
            <!-- buscador -->
            <form method="GET">
                <!-- RECORDAR CAMPO NOMBRE -->
                <input type="text" name="nombre" class="search-input" placeholder="Buscar" id="buscar">
                <button type="submit" id="enviar">Buscar</button>
            </form>

            <div class="search-container">
                <!-- desplegable categorias -->
                <select name="categorias" id="categorias">
                    <option value="0">Seleccionar categorias</option>
                    <?php require_once("../model/productos.php");
                    foreach (GestionProductos::obtenerTodasCategorias() as $key => $categoria) {
                        echo "<option value='$categoria->id'>$categoria->nombre</option>";
                    }
                    ?>
                    <!-- Agrega más categorías según sea necesario -->
                </select>
                
                <script>
                    let select_categorias = document.getElementById("categorias");
                    select_categorias.addEventListener("change", ()=>{
                        window.location = "?id_categoria=" + select_categorias.value;
                    })
                </script>

                <input type="text" placeholder="Filtrar productos">
            </div>
            <div class="header-right">
                <a href="../public/cerrarSesion.php" class="login">Cerrar Sesión</a>
                <a href="#" class="cart">🛒 Carrito</a>
            </div>
        </div>
    </header>
</body>

</html>

</body>

</html>