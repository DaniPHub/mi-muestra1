<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Registrar Notas</h1>

<form method="POST">
Nombre:
<br>
<input type="text" name="nombre">

Nota:
<br>
<input type="number" name="nota">

<button>
Evaluar
</button>
</form>

<?php

if ($_POST){
$nombre = $_POST["nombre"];
$nota = $_POST["nota"];

function estado($nota){

if($nota >= 11){
    return "Aprobado";
}
else{
    return "Desaprobado";
}

}

echo "nombre: " . $nombre;
echo "<br>";
echo "estado: " . estado($nota);
echo "<br>"; 

}
?>

</body>
</html>