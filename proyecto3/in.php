<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO en PHP</title>
</head>
<body>

<h2>Ejemplos de POO</h2>

<?php

class Estudiante{
public $nombre;
public $carrera;

public function mostrarDatos() {
return "nombre: " . $this->nombre . "<br>carrera: " . $this->carrera;
}
}

$alumno = new estudiante();
$alumno->nombre = "Daniel Alexander";
$alumno->carrera = "Ing. de software";

echo $alumno->mostrarDatos();




?>




</body>
</html>