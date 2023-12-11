<?php

class Producto {
    public $nombre;
    public $precio;
    public $descripcion;
    public $categoria_id;


    public function __construct($nombre, $precio, $descripcion, $categoria_id) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->categoria_id = $categoria_id;

    }

        
        function saveProd (){
            global $conn;
            $saveProd = mysqli_query($conn,
            "
            INSERT INTO PRODUCTOS (nombre, precio, descripcion, categoria_id) 
            VALUES ('$this->nombre', '$this->precio', '$this->descripcion', '$this->categoria_id')
            "
            );
            
            if ($saveProd){
               // echo "Producto insertado correctamente";
            }else{
              //  echo "Error al insertar producto: " . mysqli_error($conn);
            };
        
    }

    
}

