
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body onload="ajax()">
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form id='form' class="needs-validation" method="POST"  novalidate>

                                <div>
                                    <input type="text" class="form-control mb-3" name="cedula" placeholder="cedula" pattern="[0-9]{1,10}" required>
                                    <div class="valid-feedback">
                                     Looks good!
                                      </div>
                                      <div class="invalid-feedback">
                                     Only numbers! at most 10 values.
                                      </div>
                                </div><div>
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" pattern="[a-zA-Z]{1,10}" required>
                                    <div class="valid-feedback">
                                     Looks good!
                                      </div>
                                      <div class="invalid-feedback">
                                      Only characters of abecedary! at most 10 values.
                                      </div>
                                    </div><div>
                                    <input type="text" class="form-control mb-3" name="edad" placeholder="edad" pattern="[0-9]{1,2}" required>
                                    <div class="valid-feedback">
                                     Looks good!
                                      </div>
                                      <div class="invalid-feedback">
                                     Only numbers, at most 2 values.
                                      </div>
                                    </div><div>
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono" pattern="[0-9]{1,10}" required>
                                    <div class="valid-feedback">
                                     Looks good!
                                      </div>
                                      <div class="invalid-feedback">
                                    Only numbers! at most 10 values.
                                      </div>
                                    </div><div>
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="correo" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>
                                    <div class="valid-feedback">
                                     Looks good!
                                      </div>
                                      <div class="invalid-feedback">
                                    Fill in a correct email.
                                      </div>
                                    </div><div>
                                    <h6>TIPO DE PERSONA</h6>
                                    <div class="form-check">
                                    <input type="radio" class="form-check-input mb-3" id="tipo1" name="tipoPersona" placeholder="tipoPersona" value="natural" required>
                                    <label class="form-check-label" for="tipo1">Juridica</label><br>
                                    <input type="radio" class="form-check-input mb-3" id="tipo2" name="tipoPersona" placeholder="tipoPersona" value="juridica" required>
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
                                    <input type="radio" class="form-check-input mb-3" id="genero" name="genero" placeholder="genero" value="female" required>
                                    <label class="form-check-label" for="genero">Female</label><br>
                                    <input type="radio" class="form-check-input mb-3" id="genero1" name="genero" placeholder="genero" value="male" required>
                                    <label class="form-check-label" for="genero1">Male</label><BR>
                                    <div class="valid-feedback">
                                     Looks good!
                                      </div>
                                      <div class="invalid-feedback">
                                      Check one of the options!
                                      </div>
                                </div>
                                </div><div>
                                    <br><input type="submit" class="btn btn-primary mb-5" >
                                    </div>
                                </form>
                          
                                
                        </div>

                        
                        <div class="col-md-8 mt-5" id="txtHint">

                        <div class="table-responsive">
                        <table class="table" id="socio" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Cedula</th>
                                        <th>nombre</th>
                                        <th>edad</th>
                                        <th>telefono</th>
                                        <th>Correo</th>
                                        <th>tipoPersona</th>
                                        <th>genero</th>
                                        <th colspan="2"><a href="excel.php" class="btn btn-success">DESCARGAR EXCEL</a></th>
                                    </tr>
                                </thead>

                                <tbody>

                                </tbody>
             
                                        </table></div>
                            
                        </div>
                    </div>  
            </div>
            
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

            
            <script>
            
            
            
            
            
            
             function ajax(){
              const table =  document.getElementById('socio');
            
              const tbody = table.getElementsByTagName('tbody');
             
              const xhttp = new XMLHttpRequest();
                  
                          
                  xhttp.onload = function() {
                    tbody[0].innerHTML = this.responseText;
                    
                  }
            
                  xhttp.open("GET", "select.php");
                  xhttp.send();
                            
                          }
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
              'use strict'
            
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.querySelectorAll('.needs-validation')
            
              var contador = 0;
              // Loop over them and prevent submission
              Array.prototype.slice.call(forms)
                .forEach(function (form) {
                  form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                      swal("Check out!", "Please fill in the fields", "error");

                      event.preventDefault()
                      event.stopPropagation()
                    }else{
                      contador = contador + 1;
                    }
            
                    if(contador == forms.length){
                      form.classList.removeAttribute('was-validated');
                      event.preventDefault();
                      const form = document.getElementById('form');
                      
                      const xhttp = new XMLHttpRequest();
                  
                      xhttp.onload = function() {
                        ajax();
                        form.reset();
                        swal("Good job!", "You clicked the button!", "success");
                        
                      }
                          
                      xhttp.open("POST", "insertar.php");
                      xhttp.send(new FormData(form));
                      
            
                         
                    }else{
                      form.classList.add('was-validated');
                    }
            
                   
                  }, false)
                })
            })();
            
            </script>
            
            <script>
            
              function deleteS(str)
              {
                
                swal({
                  title: "Are you sure?",
                  text: "Once deleted, you will not be able to recover this imaginary file!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                   
                    const xhttp = new XMLHttpRequest();
                    xhttp.onload = function() {
                           
                      swal("Ready!", "You have deleted the record!", "success");
                           ajax();
                          }
                          
                           xhttp.open("GET", "delete.php?id="+str);
                           xhttp.send();
                                  
                            } else {
                              swal("Your  file is safe!");
                            }
                          });
                          
                              
                             
                            }
                            </script>
             
             
                 </body>
             </html>




            
