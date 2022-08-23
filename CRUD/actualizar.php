<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM socio WHERE cedula=$id";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" class="needs-validation" method="POST" novalidate>
                    
                    <div>
                                    <input type="text" class="form-control mb-3" name="cedula" placeholder="cedula" pattern="[0-9]{1,10}" value="<?php echo $row['cedula']?>" readonly>
                                    <div class="valid-feedback">
                                     Looks good!
                                      </div>
                                      <div class="invalid-feedback">
                                     Only numbers! at most 10 values.
                                      </div>
                                </div><div>
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" pattern="[a-zA-Z]{1,10}" value="<?php echo $row['nombre']?>" required>
                                    <div class="valid-feedback">
                                     Looks good!
                                      </div>
                                      <div class="invalid-feedback">
                                      Only characters of abecedary! at most 10 values.
                                      </div>
                                    </div><div>
                                    <input type="text" class="form-control mb-3" name="edad" placeholder="edad" pattern="[0-9]{1,2}" value="<?php echo $row['edad']?>" required>
                                    <div class="valid-feedback">
                                     Looks good!
                                      </div>
                                      <div class="invalid-feedback">
                                     Only numbers, at most 2 values.
                                      </div>
                                    </div><div>
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono" pattern="[0-9]{1,10}" value="<?php echo $row['telefono']?>" required>
                                    <div class="valid-feedback">
                                     Looks good!
                                      </div>
                                      <div class="invalid-feedback">
                                    Only numbers! at most 10 values.
                                      </div>
                                    </div><div>
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="correo" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" value="<?php echo $row['correo']?>" required>
                                    <div class="valid-feedback">
                                     Looks good!
                                      </div>
                                      <div class="invalid-feedback">
                                    Fill in a correct email.
                                      </div>
                                    </div><div>
                                    <h6>TIPO DE PERSONA</h6>
                                    <div class="form-check">
                                    <input type="radio" class="form-check-input mb-3" id="tipo1" name="tipoPersona" placeholder="tipoPersona" value="natural" <?php echo ($row['tipoPersona' == 'natural'])?'checked':'unchecked'?> required>
                                    <label class="form-check-label" for="tipo1">Juridica</label><br>
                                    <input type="radio" class="form-check-input mb-3" id="tipo2" name="tipoPersona" placeholder="tipoPersona" value="juridica" <?php echo ($row['tipoPersona' == 'juridica'])?'checked':'unchecked'?> required>
                                    <label class="form-check-label" for="tipo2">Natural</label>
                                    <div class="valid-feedback">
                                     Looks good!
                                      </div>
                                      <div class="invalid-feedback">
                                      Check one of the options!
                                      </div>   
                                     </div>
                                     </div><div>
                                     <br>
                                    <h6>GENERO</h6>
                                    <div class="form-check" value='Genero'>
                                    <input type="radio" class="form-check-input mb-3" id="genero" name="genero" placeholder="genero" value="female" <?php echo ($row['genero' == 'female'])?'checked':'unchecked'?> required>
                                    <label class="form-check-label" for="genero">Female</label><br>
                                    <input type="radio" class="form-check-input mb-3" id="genero1" name="genero" placeholder="genero" value="male" <?php echo ($row['genero' == 'male'])?'checked':'unchecked'?> required>
                                    <label class="form-check-label" for="genero1">Male</label><BR>
                                    <div class="valid-feedback">
                                     Looks good!
                                      </div>
                                      <div class="invalid-feedback">
                                      Check one of the options!
                                      </div>
                                </div>
                                </div><div>
                                    <br><input type="submit" class="btn btn-primary" value="Actualizar">
                                    </div>
                    </form>
                    
                </div>

                <script>

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})();

</script>

    </body>
</html>