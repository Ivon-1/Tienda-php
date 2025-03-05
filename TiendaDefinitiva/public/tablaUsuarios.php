<div>
    <?php require_once("../model/Usuario.php"); 
    foreach (GestionUsuario::getAllUsuarios() as $key => $usuarios) {
        echo
        "<tr>"
        ."<td>".$usuarios->nombre."<td>".
        "<td>".$usuarios->email."<td>".
        "<td>". $usuarios->password."<td>".
        "<td>". $usuarios->rol_id."<td>".
        "<td>". $usuarios->fecha_registro."<td>".
        "<td>"."<a href='deleteController.php?id=".$usuarios->id."'>Eliminar</a>". // TIENE QUE ESTAR  EN EL MISMO PAQUETE
        "</tr>";
    }
    ?>
</div>