<?php



$servidor = "localhost";
$bd ="colegio";
$usuario = "root";
$password = "";


try{
  $conexion = new PDO(
    "mysql: host=$servidor;dbname=$bd",
    $usuario,
    $password

  );


  $nombre = $_POST["nombre"];
  $carrera = $_POST["carrera"];

  $sql = "INSERT INTO estudiantes
      (nombre, carrera)
      Values (?,?)";

  $stmt = $conexion->prepare($sql);
  $stmt ->execute([
    $nombre,
    $carrera,

  ]);

  echo"Registro guardado correctamente";

} catch(PDOException $e){
  echo "Error: ".
  $e->getMessage(); 

}

?>