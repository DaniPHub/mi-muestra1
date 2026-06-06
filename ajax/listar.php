<?php

require_once "../config/Database.php";
require_once "../controllers/AlumnoController.php";

$db = new Database();
$con = $db->conectar();

$controller =
new AlumnoController($con);

$resultado = 
$controller->listar();

$datos = [];

while($fila = $resultado->fetch_assoc()) {

    $datos[] = $fila;
}

header('content-type: apication/json');

echo json_encode($datos);