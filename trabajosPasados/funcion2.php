<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Ingrese nota</h1>
<form method="POST">
Numero:
<input type="number" name="nota">

<button>
Registrar
</button>
</form>


<?php

if ($_POST){

$nota = $_POST["nota"];

function estado($nota){

if($nota >= 11){
    return "Aprobado";
}
else{
    return "Desaprobado";
}

}

echo estado($nota);

}

?>








</body>
</html>