<?php

class Categoria {
    public $nombre;
    public $descripcion;

    public function __construct($nombre, $descripcion) {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }

    public function saveCat() {
        global $conn;

        $saveCat = mysqli_query($conn,
            "
            INSERT INTO CATEGORIAS (nombre, descripcion) 
            VALUES ('$this->nombre', '$this->descripcion')
            "
        );

        if ($saveCat){
            echo "Categoría insertada correctamente";
        } else {
            echo "Error al insertar categoría: " . mysqli_error($conn);
        }
    }
}


