<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
require_once("../../model/Countries.php");

$data = []; // creo el array
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["name"])) {
        $data = gestionCountries::filtrarNombre($_GET["name"]);
    } else if (isset($_GET["iso2"])) {
        $data = gestionCountries::filtrarIso02($_GET['iso2']);
    } else if (isset($_GET["iso3"])) {
        $data = gestionCountries::filtrarIso03($_GET['iso3']);
    } else if (isset($_GET["id"])) {
        $data = gestionCountries::filtrarPorId($_GET['id']);
    } else {
        if (isset($_GET['page']) && isset($_GET['limit'])) {
            $data = gestionCountries::obtenerTodosResultados($_GET['page'], $_GET['limit']);
        } else {
            $message = "Falta uno de los parametros";
        }
    }
    
    if (empty($data)) {
        echo json_encode(["success" => false, "data" => null, "message" => "Error al obtener los datos"]);
        exit;
    }
}
echo json_encode(["success" => true, "data" => $data, "message" => "Datos obtenidos con exito"]);
