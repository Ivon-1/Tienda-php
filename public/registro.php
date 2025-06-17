<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Definitiva</title>
    <link rel="stylesheet" href="../view/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div>
        <!-- require once controlador -->
    <?php  require_once("../controller/registroController.php")  ?>
        <form action="" method="POST">
            <h3>Registro</h3>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">

            <label for="email">Email</label>
            <input type="text" name="email">

            <label for="password">Contraseña</label>
            <input type="text" name="password">

            <input type="submit" value="Enviar">
            <a href="index.php">Iniciar sesion</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>