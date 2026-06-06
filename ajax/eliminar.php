<?php

require_once "../config/Database.php";
require_once "../controllers/AlumnoController.php";

$db = new Database();
$con = $db->conectar();

$controller = 
new AlumnoController($con);

$controller->eliminar(
    $_POST['id']
);

echo "ok";