<?php

        include("conexion.php");
        $categoria=$_POST['categoria'];
        $marcas=$_POST['marcas'];
        $precio=$_POST['precio'];
        $descripcion=$_POST['descripcion'];
        $nombre=$_POST['nombre'];
        
        // Conexion con la base de datos 
        $sql="INSERT INTO
        productos(
             CategoriaId,
             MarcaId,
             Precio,
             DescripcionProducto
             ,Nombre)VALUES
             ('$categoria','$marcas','$precio','$descripcion','$nombre')";
        // Determinamos si se realizo o no la conexion
        $resultado=mysqli_query($conexion,$sql);
        if($resultado===TRUE){
                header("Location:index.php");
        }else
        {
          echo("Datos no insertados");
        }           

        // --      "
        // -- echo("categoria".$categoria.
        // -- "marcas".$marcas."precio".$precio.
        // -- "descripcion".$descripcion."nombre".$nombre);

?>