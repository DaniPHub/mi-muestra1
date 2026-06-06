<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herencia con Formulario</title>

    <!-- Fuente -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root{
            --primary: #2563eb;
            --secondary: #0f172a;
            --accent: #38bdf8;
            --white: #ffffff;
        }

        body{
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background:
                radial-gradient(circle at top left, #60a5fa 0%, transparent 30%),
                radial-gradient(circle at bottom right, #06b6d4 0%, transparent 30%),
                linear-gradient(135deg, #0f172a, #1e3a8a);
            padding: 20px;
        }

        .contenedor{
            width: 500px;
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(18px);
            border: 1px solid rgba(255,255,255,0.15);
            border-radius: 28px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.35);
            animation: aparecer 0.8s ease;
        }

        @keyframes aparecer{
            from{
                opacity: 0;
                transform: translateY(30px);
            }
            to{
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header{
            text-align: center;
            margin-bottom: 30px;
        }

        .icono{
            width: 90px;
            height: 90px;
            margin: auto;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            background: linear-gradient(135deg, #2563eb, #38bdf8);
            color: white;
            box-shadow: 0 10px 25px rgba(37,99,235,0.45);
            margin-bottom: 20px;
        }

        h2{
            color: white;
            font-size: 32px;
            margin-bottom: 10px;
        }

        .subtitulo{
            color: rgba(255,255,255,0.75);
            font-size: 14px;
        }

        form{
            margin-top: 25px;
        }

        .grupo{
            margin-bottom: 22px;
        }

        label{
            display: block;
            margin-bottom: 8px;
            color: white;
            font-weight: 500;
            font-size: 15px;
        }

        input{
            width: 100%;
            padding: 14px;
            border: none;
            outline: none;
            border-radius: 14px;
            background: rgba(255,255,255,0.12);
            color: white;
            font-size: 15px;
            border: 1px solid rgba(255,255,255,0.15);
            transition: 0.3s;
        }

        input::placeholder{
            color: rgba(255,255,255,0.55);
        }

        input:focus{
            border-color: #38bdf8;
            box-shadow: 0 0 10px rgba(56,189,248,0.4);
            background: rgba(255,255,255,0.15);
        }

        button{
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 14px;
            background: linear-gradient(135deg, #2563eb, #38bdf8);
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        button:hover{
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(37,99,235,0.4);
        }

        .resultado{
            margin-top: 30px;
        }

        .card{
            background: rgba(255,255,255,0.10);
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 18px;
            padding: 20px;
            margin-top: 18px;
            transition: 0.3s;
        }

        .card:hover{
            transform: translateY(-4px);
            background: rgba(255,255,255,0.14);
        }

        .titulo-card{
            color: #93c5fd;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .texto{
            color: white;
            font-size: 18px;
            line-height: 1.6;
        }

        .dato{
            color: #facc15;
            font-weight: bold;
        }

        @media(max-width: 550px){

            .contenedor{
                width: 100%;
                padding: 28px;
            }

            h2{
                font-size: 26px;
            }

            .texto{
                font-size: 16px;
            }
        }

    </style>
</head>

<body>

<div class="contenedor">

    <div class="header">

        <div class="icono">🎓</div>

        <h2>Herencia en PHP</h2>

        <p class="subtitulo">
            Formulario con Programación Orientada a Objetos
        </p>

    </div>

    <form method="POST">

        <div class="grupo">
            <label>Nombre del estudiante</label>

            <input 
                type="text" 
                name="nombre" 
                placeholder="Ingrese su nombre"
                required
            >
        </div>

        <div class="grupo">
            <label>Carrera profesional</label>

            <input 
                type="text" 
                name="carrera" 
                placeholder="Ingrese su carrera"
                required
            >
        </div>

        <button type="submit">
            Mostrar Información
        </button>

    </form>

<?php

// Clase padre
class Persona {

    public $nombre;

    public function saludar() {

        return "Hola, mi nombre es <span class='dato'>" 
        . $this->nombre . 
        "</span>";
    }
}

// Clase hija
class Estudiante extends Persona {

    public $carrera;

    public function estudiar() {

        return "Actualmente estudio la carrera de <span class='dato'>" 
        . $this->carrera . 
        "</span>";
    }
}

// Verificar si el formulario fue enviado
if($_POST){

    $alumno = new Estudiante();

    $alumno->nombre = $_POST['nombre'];
    $alumno->carrera = $_POST['carrera'];

    echo "<div class='resultado'>";

    echo "
    <div class='card'>

        <div class='titulo-card'>
            Información Personal
        </div>

        <div class='texto'>
            " . $alumno->saludar() . "
        </div>

    </div>
    ";

    echo "
    <div class='card'>

        <div class='titulo-card'>
            Información Académica
        </div>

        <div class='texto'>
            " . $alumno->estudiar() . "
        </div>

    </div>
    ";

    echo "</div>";
}

?>

</div>

</body>
</html>