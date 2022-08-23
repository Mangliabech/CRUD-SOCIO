<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM socio";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA SOCIO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST" onsubmit="return validateForm()">

                                    <input type="text" class="form-control mb-3" name="cedula" placeholder="cedula" pattern="[0-9]{1,10}">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" pattern="[a-zA-Z]{1,10}">
                                    <input type="text" class="form-control mb-3" name="edad" placeholder="edad" pattern="[0-9]{1,2}">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono" pattern="[0-9]{1,10}">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="correo" pattern="[0-9]{1,10}">
                                    
                                    <h6>TIPO DE PERSONA</h6>
                                    <div class="form-check">
                                    <input type="radio" class="form-check-input mb-3" id="tipo1" name="tipoPersona" placeholder="tipoPersona" value="natural">
                                    <label class="form-check-label" for="tipo1">Juridica</label><br>
                                    <input type="radio" class="form-check-input mb-3" id="tipo2" name="tipoPersona" placeholder="tipoPersona" value="juridica">
                                    <label class="form-check-label" for="tipo2">Natural</label>   
                                </div>
                                <br>
                                    <h6>GENERO</h6>
                                    <div class="form-check" value='Genero'>
                                    <input type="radio" class="form-check-input mb-3" id="genero" name="genero" placeholder="genero" value="female">
                                    <label class="form-check-label" for="genero">Female</label><br>
                                    <input type="radio" class="form-check-input mb-3" id="genero1" name="genero" placeholder="genero" value="male">
                                    <label class="form-check-label" for="genero1">Male</label><BR>
                                </div>
                                    
                                    <br><input type="submit" class="btn btn-primary" onclick='swal("Good job!", "You clicked the button!", "success")'>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Cedula</th>
                                        <th>nombre</th>
                                        <th>edad</th>
                                        <th>telefono</th>
                                        <th>Correo</th>
                                        <th>tipoPersona</th>
                                        <th>genero</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['cedula']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['edad']?></th>
                                                <th><?php  echo $row['telefono']?></th>
                                                <TH><?php  echo $row['correo']?></TH>
                                                <th><?php  echo $row['tipoPersona']?></th>   
                                                <th><?php  echo $row['genero']?></th>       
                                                <th><a href="actualizar.php?id=<?php echo $row['cedula'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['cedula'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
            <script>  
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</script>

    </body>
</html>