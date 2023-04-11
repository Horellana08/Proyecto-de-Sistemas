<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Listado de Registro</h1>

    </div>
    
    <div class="container">
        <table class="table mt-5">
            <thead>
                <tr>
                   <th scope="col">ID</th>
                   <th scope="col">Categoria</th>
                   <th scope="col">Marca</th>
                   <th scope="col">Precio</th>
                   <th scope="col">Descripcion</th>
                   <th scope="col">Nombre</th>
                   <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        require("conexion.php");
                        $sql=$conexion->query("SELECT* FROM productos INNER JOIN categorias ON productos.CategoriaId=categorias.Id
                        INNER JOIN marcas ON productos.MarcaId=marcas.Id");

                        if($sql){
                            while($resultado=$sql->fetch_assoc()){
                                ?>  
                                <tr>
                                    <th scope="row">
                                        <?php
                                        echo $resultado['IdProducto']?>
                                    </th>
                                    <th scope="row">
                                        <?php
                                        echo $resultado['NombreCategoria']?>
                                    </th>
                                    <th scope="row">
                                        <?php
                                        echo $resultado['NombreMarca']?>
                                    </th>
                                    <th scope="row">
                                        <?php
                                        echo $resultado['Precio']?>
                                    </th>
                                    <th scope="row">
                                        <?php
                                        echo $resultado['DescripcionProducto']?>
                                    </th>
                                    <th scope="row">
                                        <?php
                                        echo $resultado['Nombre']?>
                                    </th>
                                    <th scope="row">
                                        <?php
                                        echo $resultado['Estado']?>
                                    </th>
                                    

                                </tr>
                                <?php

                            }
                        } else{
                            printf("Error:%s/n",$conexion->error);
                        }
                    ?>

                      
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>