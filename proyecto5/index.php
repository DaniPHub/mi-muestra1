<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Estudiantes</title>
</head>
<body>
<h2>Formulario de Registro</h2>    

<form action="guardar.php" method="POST">

    Nombre:
    <input type="text" name="nombre" required>
    <br><br>

        Carrera:
    <input type="text" name="carrera" required>
    <br><br>

    <button type="submit">
        Guardar
</button>

</form>

</body>
</html>