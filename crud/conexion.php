<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="ecommerce";

    $conexion= new mysqli($host,$user,$password,$db);

    if(!$conexion){
        echo "Conexión fallida";
    }
    else{
        echo "Conexión exitosa";
    }




?>