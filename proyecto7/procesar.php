<?php

$codigo = trim($_POST['codigo']);
$nombre = trim($_POST['nombre']);
$carrera = $_POST['carrera'];
$ciclo = $_POST['ciclo'];
$turno = $_POST['turno'];
$cursos = $_POST['cursos'] ?? [];

// VALIDACIONES

if (
    empty($codigo) ||
    empty($nombre) ||
    empty($carrera) ||
    empty($ciclo) ||
    empty($turno)
) {
    die("Todos los campos son obligatorios.");
}

if (count($cursos) < 3) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Error</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="container">

    <div class="error">
        Debe seleccionar mínimo 3 cursos.
    </div>

    <a href="index.php">
        Volver al formulario
    </a>

</div>

</body>
</html>
<?php
exit();
}

// CANTIDAD DE CURSOS

$cantidadCursos = count($cursos);

// SUBTOTAL

$subtotal = $cantidadCursos * 150;

// DESCUENTO

$descuento = 0;

if ($cantidadCursos > 5) {
    $descuento = $subtotal * 0.10;
}

// RECARGO

$recargo = 0;

if ($turno == "Noche") {
    $recargo = ($subtotal - $descuento) * 0.05;
}

// TOTAL

$totalPagar =
    $subtotal
    - $descuento
    + $recargo;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de Matrícula</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="container">

    <div class="resultado">

        <h2>
            Ficha de Matrícula
        </h2>

        <p>
            <strong>Código:</strong>
            <?php echo $codigo; ?>
        </p>

        <p>
            <strong>Nombre:</strong>
            <?php echo $nombre; ?>
        </p>

        <p>
            <strong>Carrera:</strong>
            <?php echo $carrera; ?>
        </p>

        <p>
            <strong>Ciclo:</strong>
            <?php echo $ciclo; ?>
        </p>

        <p>
            <strong>Turno:</strong>
            <?php echo $turno; ?>
        </p>

        <hr>

        <p>
            <strong>Cursos Seleccionados:</strong>
        </p>

        <ul>
            <?php
            foreach ($cursos as $curso) {
                echo "<li>$curso</li>";
            }
            ?>
        </ul>

        <hr>

        <p>
            Cantidad de Cursos:
            <strong>
                <?php echo $cantidadCursos; ?>
            </strong>
        </p>

        <p>
            Subtotal:
            <strong>
                S/
                <?php
                echo number_format(
                    $subtotal,
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
                );
                ?>
            </strong>
        </p>

        <p>
            Recargo:
            <strong>
                S/
                <?php
                echo number_format(
                    $recargo,
                    2
                );
                ?>
            </strong>
        </p>

        <p>
            Total a Pagar:
            <strong>
                S/
                <?php
                echo number_format(
                    $totalPagar,
                    2
                );
                ?>
            </strong>
        </p>

        <a href="index.php">
            Volver
        </a>

    </div>

</div>

</body>
</html>