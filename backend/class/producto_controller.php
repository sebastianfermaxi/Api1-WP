<?php

$dsn = 'mysql:host=localhost;dbname=MIPROYECTO';
$usuario = 'root';
$contraseña = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $conexion = new PDO($dsn, $usuario, $contraseña);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $data = json_decode(file_get_contents("php://input"));
        $nombre = $data->nombre;
        $categoria_id = $data->categoria_id;

        $stmt = $conexion->prepare("INSERT INTO PRODUCTOS (categoria_id, nombre) VALUES (?, ?)");
        $stmt->execute([$categoria_id, $nombre]);

        echo json_encode(["success" => true, "message" => "Producto insertado correctamente"]);
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    try {
        $conexion = new PDO($dsn, $usuario, $contraseña);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $resultados = $conexion->query("SELECT * FROM PRODUCTOS")->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($resultados);
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
