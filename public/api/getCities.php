<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
require_once("../../model/cities.php");

$data = [];
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["state_id"])) {
        $message = "";
        $data = gestionCitys::filtrarCiudadStateId($_GET['state_id']);
    } else if (isset($_GET["name"])) {
        $data = gestionCitys::filtrarCityNombre($_GET['name']);
    } else if (isset($_GET["country_id"])) {
        $data = gestionCitys::filtrarCityCountryId($_GET['country_id']);
    } else if (isset($_GET["id"])) {
        $data = gestionCitys::filtrarCityId($_GET['id']);
    } else {
        if (isset($_GET['page']) && isset($_GET['limit'])) {
            $data = gestionCitys::obtenerTodosResultados($get['page'], $get['limit']);
        } else {
            $message = "Falta uno de los parametros";
        }
    }

    if (empty($data)) {
        json_encode(["success" => false, "data" => null, "message" => "No se encontraron resultados."]);
        exit;
    }
}
echo json_encode((["success" => true, "data" => $data, "message" => "Se encontraron resultados."]));
