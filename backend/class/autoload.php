<?php
spl_autoload_register(function ($class_name) {
    include 'backend/class/' . $class_name . '.php';
});

?>
