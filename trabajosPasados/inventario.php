<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
</head>
<body>

<center>

<h1>Registre Datos</h1>

<form method="POST">
Producto:
<br>
<input type="text" name="producto">

<br>

Stock actual:
<br>
<input type="number" name="stock">

<br>

Ventas:
<br>
<input type="number" name="ventas">

<br><br>

<button>
Consultar
</button>
</form>

<?php

if ($_POST){
$producto = $_POST["producto"];
$stock = (int)$_POST["stock"];
$ventas = (int)$_POST["ventas"];

function estado($stock,$ventas){

if($ventas > $stock){
    return "No hay suficiente stock";
}
else{
    return ($stock-$ventas);
}

}

echo "Producto: " . $producto;
echo "<br>";
echo "estado: " . estado($stock,$ventas);
echo "<br>"; 

}
?>

<center>

</body>
</html>