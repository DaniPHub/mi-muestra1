<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>polimorfismo</title>
</head>
<body>

<h2>ejemplo de polimorfismo</h2>

<?php
class Animal {
    public function sonido() {
        return "hace un sonido";
    }
}

class Perro extends Animal {

    public function sonido() {
        return "guau guau";
    }
}

class Gato extends Animal {
    public function sonido() {
        return "miau miau";
    }
}

$perro = new Perro();
$gato = new Gato();

echo "Perro: " . $perro->sonido();
echo "<br>";

echo "Gato: " . $gato->sonido();

?>

</body>
</html>