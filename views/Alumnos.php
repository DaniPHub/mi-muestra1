<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>

<div class="container mt4">

    <h2 class="mb-4">
        Sistema de Alumnos MVC
    </h2>

    <div class="row mb-3">

        <div class="col mb-6">

            <input
                type="text"
                id="buscar"
                class="form-control"
                placeholder="Buscar alumno">

        </div>

        <div class="col-md-6 text-end">

            <button
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#modalAlumno">

            Nuevo alumno
            </button>
        </div>

    </div>

    <table class="table table-border table-striped">

        <thead class="table-dark">

            <tr>

                <th>ID</th>
                <th>Nombre</th>
                <th>Carrera</th>
                <th>Acciones</th>
            </tr>

        </thead>

        <tbody id="contenido">

        </tbody>

    </table>
</div>

<div class="modal fade" id="modalAlumno">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h5>Registrar Alumno</h5>

            </div>

            <div class="modal-body">

                <input
                    type="text"
                    id="nombre"
                    class="form-control mb-3"
                    placeholder="Nombre">

                <input
                    type="text"
                    id="carrera"
                    class="form-control"
                    placeholder="Carrera">

            </div>

            <div class="modal-footer">

                <button
                    class="btn btn-succes"
                    oneclick="guardar()">

                    Guardar

                </button>

            </div>
       
        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
crossorigin="anonymous"></script>

<script src="assets/js/app.js"></script>

</body>
</html>