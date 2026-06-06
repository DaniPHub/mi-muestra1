<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    
<h2>Evaluar nota</h2>

<form method="POST">

Ingrese nota:
<input type="number" name="nota">

<button>
Evaluar
</button>

</form>

<?php

if($_POST){

$nota = $_POST["nota"];

if($nota >= 11){

echo "<h3>Aprobado</h3>";

}else{

echo "<h3>Desaprobado</h3>";

}

}

?>

</body>
</html>