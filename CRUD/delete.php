<?php


include("conexion.php");
$con=conectar();

$cedula=$_GET['id'];

$sql="DELETE FROM socio  WHERE cedula=$cedula";
$query=mysqli_query($con,$sql);

   
?>
