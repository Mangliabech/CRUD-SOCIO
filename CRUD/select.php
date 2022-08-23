<?php
header("Content-Type: application/json; charset=UTF-8");
include("conexion.php");
$con=conectar();




$mensaje = '';


$stmt = $con->query("SELECT * FROM socio");





while($row = $stmt->fetch_assoc()){

$mensaje .='  <tr>';
$mensaje .='  <th>'.$row['cedula'].'</th>';
$mensaje .='  <th>'.$row['nombre'].'</th>';
$mensaje .=' <th>'.$row['edad'].'</th>';
$mensaje .='  <th>'.$row['telefono'].'</th>';
$mensaje .='  <th>'.$row['correo'].'</th>';
$mensaje .='   <th>'.$row['tipoPersona'].'</th> ';  
$mensaje .='  <th>'.$row['genero'].'</th>   ';    
$mensaje .='  <th><a href="actualizar.php?id='.$row['cedula'].'" class="btn btn-info">Editar</a></th>';
$mensaje .='   <th><button  onclick="deleteS('.$row['cedula'].')" class="btn btn-danger">Eliminar</button></th>   ';                                     
$mensaje .=' </tr>';

}


                                         

echo $mensaje;


?>