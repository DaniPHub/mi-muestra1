<?php

class AlumnoModel {

    private $conexion;

    public function _construct($conexion) {
        $this->conexion = $conexion;
    }
    public function listar() {

        $sql = "SELECT * FROM alumnos";

        return $this->conexion->query($sql);        
    }

    public function guardar($nombre,$carrera) {

        $stmt = $this->conexion->prepare(
            "INSERT INTO alumnos(nombre,carrera)
            VALUES (?,?)"
        );

        $stmt->bind_param(
            "ss",
            $nombre,
            $carrera
        );

        return $stmt->execute();
    }

    public function eliminar($id){
        $stmt = $this->conexion->prepare(
            "DELETE FROM alumnos WHERE id=?"
        );

        $stmt->bind_param(
            "i",
            $id
        );

        return $stmt->execute();
    }
}