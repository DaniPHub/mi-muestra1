<?php

$nombre = trim($_POST['nombre']);
$cargo = trim($_POST['cargo']);
$horas = $_POST['horas'];
$pagoHora = $_POST['pagoHora'];
$bonificacion = $_POST['bonificacion'];
$sistema = $_POST['sistema'];

//VALIDACIONES

if(
    empty($nombre) ||
    empty($cargo) ||
    empty($horas) ||
    empty($pagoHora) ||
    empty($bonificacion)
) {
    die("Todos los campos son obligatorios.");
}

if(
    $horas < 0 ||
    $pagoHora < 0 ||
    $bonificacion < 0
) {
    die("No se permiten numeros negativos.");
}

//HORAS EXTRA

$extra = 0;

if($horas > 160) {
    $horasExtra = 
        $horas - 160;
    
    $extra = 
        $horasExtra = 
        ($pagoHora * 1.5);
}

//SUELDO BRUTO

$sueldoBruto = 
    ($horas * $pagoHora)
    + $bonificacion
    + $extra;

//AFP O ONP

if ($sistema == "AFP") {
    $descuento = 
        $sueldoBruto * 0.13;

} else {

    $descuento = 
        $sueldoBruto * 0.10;
}

//IMPUESTO

$impuesto = 0;

if ($sueldoBruto >3000) {

    $impuesto = 
        $sueldoBruto * 0.8;
}

//NETO

$sueldoNeto = 
    $sueldoBruto
    - $descuento
    - $impuesto;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
<div class = "container">

    <div class = "resultado">
        <h2>
            Boleta de Pago
        </h2>

        <p>
            <strong>Trabajador:</strong>
            <?php echo $cargo; ?>
        </p>

        <p>
            <strong>Sistema:</strong>
            <?php echo $sistema; ?>
        </p>
        
        <hr>

        <p>
            Sueldo Bruto: 
            <strong>
                S/
                <?php
                echo number_format(
                    $sueldoBruto,
                    2
                );
                ?>
            </strong>
        </p>

        <p>
            Descuento:
            <strong>
                S/
                <?php
                echo number_format(
                    $descuento,
                    2
                )
                ?>
            </strong>
        </p>
        
        <p>
            Impuesto:
            <strong>
                S/
                <?php
                echo number_format(
                    $impuesto,
                    2
                );
                ?>
            </strong>
        </p>

        <p>
            Sueldo Neto:
            <strong>
                S/
                <?php
                echo number_format(
                    $sueldoNeto,
                    2
                )
                ?>
            </strong>
        </p>

        <a href="index.php">
            Volver
        </a>
    
</div>

</body>
</html>