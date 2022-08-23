<?php

Header('Content-type: application/xls');
Header("Content-disposition: attachment;filename=BASEDATOS.xls");
include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM socio";
    $query=mysqli_query($con,$sql);

?>

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
                                                <th><?php  echo $row['correo']?></th>
                                                <th><?php  echo $row['tipoPersona']?></th>   
                                                <th><?php  echo $row['genero']?></th>       
                                                                                 
                                            </tr>
                                        <?php 
                                            }
                                        ?>   

                                </tbody>
             
                                        </table>