<?php
    $servername = "localhost:3306"; //host donde se almacena la base
    $user = "root";
    $password = ""; // contraseña de base 
    $database = "mexicox"; // nombre de la base de datos
    $tbl_name = "datos_usuario"; // tabla de la base
    $connection = new mysqli($servername, $user, $password, $database);
    
    //Check connection
    if ($connection->connect_error) {
    die("La conexion con la base de datos falló: " . $connection->connect_error);
    }
?>
