<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="container">

    <h1>Sistema de Matrícula SENATI</h1>

    <form action="procesar.php" method="POST">

        <fieldset>
            <legend>Datos del Estudiante</legend>

            <label>Código del Estudiante:</label><br>
            <input type="number" name="codigo" required><br><br>

            <label>Nombre Completo:</label><br>
            <input type="text" name="nombre" required><br><br>

            <label>Carrera:</label><br>
            <select name="carrera" required>
                <option value="">Seleccione</option>
                <option value="Ingeniería de Software">Ingeniería de Software</option>
                <option value="Administración Industrial">Administración Industrial</option>
                <option value="Mecánica Automotriz">Mecánica Automotriz</option>
                <option value="Electricidad Industrial">Electricidad Industrial</option>
            </select>
            <br><br>

            <label>Ciclo:</label><br>
            <select name="ciclo" required>
                <option value="">Seleccione</option>
                <?php
                for($i=1; $i<=10; $i++){
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
            <br><br>

            <label>Turno:</label><br>
            <input type="radio" name="turno" value="Mañana" required> Mañana
            <input type="radio" name="turno" value="Tarde"> Tarde
            <input type="radio" name="turno" value="Noche"> Noche
        </fieldset>

        <br>

        <fieldset>
            <legend>Cursos Disponibles</legend>

            <input type="checkbox" name="cursos[]" value="Programación">
            Programación <br>

            <input type="checkbox" name="cursos[]" value="Base de Datos">
            Base de Datos <br>

            <input type="checkbox" name="cursos[]" value="Redes">
            Redes <br>

            <input type="checkbox" name="cursos[]" value="Diseño Web">
            Diseño Web <br>

            <input type="checkbox" name="cursos[]" value="Matemática">
            Matemática <br>

            <input type="checkbox" name="cursos[]" value="Algoritmos">
            Algoritmos <br>
        </fieldset>

        <br>

        <input type="submit" value="Calcular Matrícula">
        <input type="reset" value="Limpiar">

    </form>

</div>
    
</body>
</html>