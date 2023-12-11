<?php 

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


createCatTab($conn);
createProdTab($conn);

function createCatTab ($conn){
    //$resDropProd = mysqli_query($conn, "DROP TABLE IF EXISTS PRODUCTOS");
    //$resDropCat = mysqli_query($conn, "DROP TABLE IF EXISTS CATEGORIAS");
    $resCreate = mysqli_query($conn,
        "
        CREATE TABLE CATEGORIAS(
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(30) UNIQUE,
        descripcion VARCHAR(30))
        "
    );
    
    if ($resCreate){
       // echo "Tabla categorias creada correctamente";
    }else{
       // echo "Tabla categorias no creada" . mysqli_error($conn);
    };

}


function createProdTab ($conn){
    //$resDrop = mysqli_query($conn, "DROP TABLE IF EXISTS PRODUCTOS");
    $resCreate = mysqli_query($conn,
    "
        CREATE TABLE PRODUCTOS(
        id INT(6)  AUTO_INCREMENT PRIMARY KEY,
        categoria_id INT(6) ,
        FOREIGN KEY (categoria_id) REFERENCES CATEGORIAS(id),
        nombre VARCHAR(30) UNIQUE ,
        precio FLOAT(2) ,
        descripcion VARCHAR(30))
    "
    );
    
    if ($resCreate){
       // echo "Tabla productos creada correctamente";
    }else{
       // echo "Tabla productos no creada". mysqli_error($conn);
    };

}


?>