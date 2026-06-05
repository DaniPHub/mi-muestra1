<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>

<!--creen un formulario que registre nombre, edd y carrera. y que al finalizar muestre la informacion enviada al servidor.-->
<br><br>

<h2>Registrar datos</h2>

<form method="POST">

Ingrese nombre:
<input type="text" name="nombre">
<br><br>

Ingrese edad:
<input type="number" name="edad">
<br><br>

Ingrese carrera:
<input type="text" name="carrera">
<br><br>

<button>
registrar
</button>

</form>

<br>

<?php
if ($_POST){

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$carrera = $_POST["carrera"];

echo "Nombre: " . $nombre . "<br><br>";
echo "Edad: " . $edad . "<br><br>";
echo "Carrera: " . $carrera . "<br><br>";

}

?>
    
</body>
</html>