<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<body>

<!--crea un formulario que reciba un numero y muestre su tabla de multiplicar-->

<h1>Tabla de Multiplicar</h1>
<form method="POST">
Numero:
<input type="number" name="numero">

<button>
Generar
</button>
</form>

<br>
<hr>

<?php
if ($_POST){

$numero = $_POST["numero"];
for($i=1; $i<=12; $i++) {
    echo $numero . " x " . $i . " = " . ($numero*$i) . "<br>";
}

}


?>


</body>
</html>
