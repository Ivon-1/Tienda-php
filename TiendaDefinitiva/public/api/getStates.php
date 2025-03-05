<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
require_once("../../model/States.php");
/**
 * obtencion de los estados segun el parametro señalado
 */
$data = [];
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["country_id"])) {
        $data = gestionStates::obtenerEstadosPorPaisId($_GET['country_id']);
    }else if(isset($_GET["name"])){
        $data = gestionStates::filtrarEstadoNombre($_GET['name']);
    }else if(isset($_GET["country_code"])){
        $data = gestionStates::filtrarCodigoPaisIso($_GET['country_code']);
    }else if(isset($_GET["id"])){
        $data = gestionStates::obtenerEstadosPorId($_GET['id']);
    }else{
        //$data = gestionStates::obtenerEstados();
        if (isset($_GET['page']) && isset($_GET['limit'])) {
            $data = gestionStates::obtenerTodosResultados($GET['page'], $GET['limit']);
        } else {
            $message = "Falta uno de los parametros";
        }
    }

    if (empty($data)) {
        echo json_encode(["success"=> false, "data" => $data, null => "Error. No se han encontrado los estados mencionados"]);
        exit;
    }
}
echo json_encode(["success" => true, "data"=> $data, "message" => "Datos obtenidos de forma exitosa"]);






?>