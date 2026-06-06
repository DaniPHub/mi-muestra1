<?php

require_once _DIR_ . '/../models/AlumnoModel.php';

class AlumnoController {

    private $modelo;

    public function _construct($conexion) {

        $this->modelo =
            new AlumnoModel ($conexion);            
    }

    public function listar() {

        return $this->modelo->listar();
    }

    public function guardar($nombre,$carrera) {

        return $this->modelo->guardar(
            $nombre,
            $carrera
        );
    }

    public function eliminar($id) {

        return $this->modelo->eliminar($id)
    }
}