<?php

$dsn = 'mysql:host=localhost;dbname=MIPROYECTO';
$usuario = 'root';
$contraseña = '';

$server = "localhost";
$user = "root";
$pass = "";
$db_name = "MIPROYECTO";

$conn = mysqli_connect($server, $user, $pass, $db_name);

if (!$conn){
    //echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    //echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    die("la conexión falló");
};


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = json_decode(file_get_contents("php://input"));

    $nombre = $data->nombre;
    $categoria_id = $data->categoria_id;
    
    //Se inserta la categoría en la base de datos
    $query = "INSERT INTO CATEGORIAS (nombre) VALUES ('$nombre')";
    $result = mysqli_query($conn, $query);

}else if ($_SERVER['REQUEST_METHOD'] === 'GET') {

try {
    $conexion = new PDO($dsn, $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consultar todos los registros de la tabla usuarios
    $resultados = $conexion->query("SELECT * FROM CATEGORIAS")->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($resultados);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

}

?>