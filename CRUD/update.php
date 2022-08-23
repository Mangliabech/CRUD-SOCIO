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

$sql="UPDATE socio SET  cedula=$cedula,nombre='$nombre',edad=$edad, telefono=$telefono,correo='$correo', tipoPersona = '$tipoPersona', genero='$genero' WHERE cedula=$cedula";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: socio.php");
    }
?>