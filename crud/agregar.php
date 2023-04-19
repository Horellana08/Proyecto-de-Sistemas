<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

   <div class="container">

        <h1 class="text-center">Agregar Producto</h1>

   </div>

   <div class="container">

        <form action="controlador.php" method="POST">
            <div class="row">
                <div class="col-4">
                    <label>Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Digite el nombre"></input>

                </div>
                <div class="col-4">
                    <label>Descripcion del producto</label>
                    <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Digite la descripcion"></input>

                </div>
                <div class="col-4">
                    <label>Precio</label>
                    <input type="text" id="precio" name="precio" class="form-control" placeholder="Digite el nombre"></input>

                </div>
                <div class="col-4 mt-4">
                    <label>Categoria</label>
                    <select class="form-control" id="categoria" name="categoria" >
                        <option value="1" >Seleccione una categoria</option>
                        <?php
                            include("conexion.php");
                            $sql = $conexion->query("SELECT * FROM categorias");
                            while ($row = $sql->fetch_assoc()){
                                echo "<option value='".$row['Id']."'>".$row['NombreCategoria']."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="col-4 mt-4">
                    <label>Marcas</label>
                    <select class="form-control" id="marcas" name="marcas" >
                        <option value="1" >Seleccione una categoria</option>
                        <?php
                            include("conexion.php");
                            $sql = $conexion->query("SELECT * FROM marcas");
                            while ($row = $sql->fetch_assoc()){
                                echo "<option value='".$row['Id']."'>".$row['NombreMarca']."</option>";
                            }
                        ?>
                    </select>
                </div>
              
            </div>
            <div class="row mt-4">
                    <div class="col-4">
                    <button type="submit" class="btn btn-danger">Enviar</div>
                    </div>
            </div>

          
        </form>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    
</body>
</html>