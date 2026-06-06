<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla de Sueldo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="container">

    <h1>
        Sistema de Planilla
    </h1>

    <form
    action="procesar.php"
    method="POST">

    <label>
    Nombre
    </label>

    <input
    type="text"
    name="nombre"
    required>

    <label>
    Cargo
    </label>

    <input
    type="text"
    name="cargo"
    required>

    <label>
        Horas Trabajadas
    </label>

    <input
    type="number"
    name="horas"
    required>

    <label>
        Pago por Hora
    </label>

    <input 
    type="number"
    step="0.01"
    name="pagoHora"
    required>

    <label>
        Bonificacion
    </label>

    <input 
    type="number"
    step="0.01"
    name="bonificacion"
    required>

    <label>
        Sistema Pensionario
    </label>
    
    <div class="radio">

        <input
            type="radio"
            name="sistema"
            value="AFP"
            required>

        AFP

        <input
            type="radio"
            name="sistema"
            value="ONP">

        ONP

    </div>

    <button type="submit">
        calcular Sueldo
    </button>

</form>

</div>
    
</body>
</html>