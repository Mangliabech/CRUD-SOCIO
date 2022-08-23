<?php
include("conexion.php");
$con=conectar();

$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];
$correo = $_POST['correo'];
$tipoPersona=$_POST['tipoPersona'];
$genero=$_POST['genero'];

mail($correo,'REGISTRO BASE DE DATOS','Registro exitoso! apreciado '.$nombre,'From: sepulvedafernando20@gmail.com');

$sql="INSERT INTO socio VALUES($cedula,'$nombre',$edad,'$telefono','$correo','$tipoPersona','$genero')";
$query= mysqli_query($con,$sql);


?>