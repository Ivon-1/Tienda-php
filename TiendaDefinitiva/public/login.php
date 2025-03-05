<!-- controlador login -->
<?php require_once("../controller/loginController.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <link rel="stylesheet" href="../view/estilos.css">
</head>

<body>
    <div>
        <form method="post">
            <label for="email">Email</label>
            <input type="text" name="email">

            <label for="password">Contraseña</label>
            <input type="text" name="password" >

            <input type="submit" value="Enviar">
            <a href="registro.php ">Registro</a>
        </form>
    </div>
</body>

</html>