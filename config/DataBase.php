<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "colegio";

    public function conectar() {

        $conexion = new mysqli(
            $this->host,
            $this->user,
            $this->pass,
            $this->db,
        );

        if ($conexion->conect_error) {
            die("error de conexion");
        }

        return $conexion;
    }
    
}

?>
