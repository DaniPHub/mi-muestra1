<?php       

echo "<h2>Ejercicio 1 sumas</h2>";

$num1 = 5;
$num2 = 10;
$suma = $num1 + $num2;

echo "la suma de $num1 + $num2 es: $suma";

echo "<hr>";

echo "<h2>Ejercicio 2: Datos Personales</h2>";

$nombre = "Carlos";
$apellido = "Perez";
$edad = 20;
$carrera = "Programacion";

echo "Nombre: " . $nombre . "<br>";
echo "Apellido " . $apellido . "<br>";
echo "edad" . $edad . "<br>";
echo "carrera " . $carrera;

echo "<hr>";



echo "<h2>Si juan tiene 5 años mas que su hermano y 3 años menos que su primo lorenzo. 
¿cuantos años tiene juan?</h2>";

$lorenzo = 16;

$juan = $lorenzo - 3;

echo "Juan tiene " . $juan . " años";

echo "<br>";

echo "<hr>";

echo "<h2>Ejercicio 3: Operaciones 
Matematicas</h2>";

$a = 20;
$b = 10;

echo "suma: " . ($a+$b) . "<br>";
echo "resta: " . ($a-$b) . "<br>";
echo "multiplicacion: " . ($a*$b) . "<br>";
echo "division: " . ($a/$b);

echo "<hr>";

echo "<h2>Ejercicio de geometria</h2>";

$y = 32;

$x = 20;

$resultado = (($x*$y)*2)/($x*$y);
$resultado2 = "(($x*$y)*2)/($x*$y)";


echo "variable x: " . $x . "<br>";
echo "variable y: " . $y . "<br>";
echo "resolucion: " . $resultado2 . "<br>" . "<br>";

echo "el resultado es: " . $resultado;

echo "<hr>";

echo "<h2>Promedio de notas</h2>";

$nota1 = 13;
$nota2 = 18;
$nota3 = 14;
$promedio = ($nota1+$nota2+$nota3)/3;

echo "El promedio es: " . $promedio;

echo "<h2>Realiza un programa en php que dado un numero detrmine si es positivo, negativo o 0</h2>";

// Formulario hecho con PHP
echo "
<form method='post'>
    Ingrese un número:
    <input type='text' name='numero'>
    <input type='submit' value='Evaluar'>
</form>
";

// Verificamos si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Guardamos el número ingresado
    $entrada = $_POST["numero"];

    // Validamos si es un número
    if (!is_numeric($entrada)) {

        echo "<p style='color:red;'>Error: Debes ingresar un número válido.</p>";

    } else {

        // Convertimos a número decimal
        $numero = floatval($entrada);

        echo "<h3>Resultado:</h3>";

        // Evaluamos el número
        if ($numero > 0) {

            echo "El número $numero es POSITIVO.";

        } elseif ($numero < 0) {

            echo "El número $numero es NEGATIVO.";

        } else {

            echo "El número ingresado es CERO (0).";
        }
    }
}


?>