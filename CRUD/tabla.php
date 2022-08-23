
<?
include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM socio";
    $query=mysqli_query($con,$sql);
    $message .= " ";

    $message .=  '<table class="table" >';
    $message .=  '<thead class="table-success table-striped" >';
    $message .=   '  <tr>';
    $message .=   '     <th>Cedula</th>';
    $message .=   '      <th>nombre</th>';
    $message .=   '       <th>edad</th>';
    $message .=   '      <th>telefono</th>';
    $message .=   '       <th>tipoPersona</th>';
    $message .=   '        <th>genero</th>';
    $message .=   '   </tr>';
    $message .=   ' </thead>';

    $message .=   ' <tbody>';

   while($row=mysqli_fetch_array($query)){
   
    $message .=   '            <tr>';
    $message .=   '                <th> '.$row['cedula'].'</th>';
    $message .=   '                <th>  '.$row['nombre'].'</th>';
    $message .=   '            <th>  '.$row['edad'].'</th>';
    $message .=   '             <th>   '.$row['telefono'].'</th>';
    $message .=   '            <th>   '.$row['tipoPersona'].'</th>  '; 
    $message .=   '            <th>   '.$row['genero'].'</th>    ';   
    $message .=   '            <th><a href="actualizar.php?id=  '.$row['cedula'].' " class="btn btn-info">Editar</a></th>';
    $message .=   '            <th><a href="delete.php?id=  '.$row['cedula'].' " class="btn btn-danger">Eliminar</a></th>';                                        
    $message .=   '      </tr>';

   
        }
  
    $message .=   '</tbody>';
    $message .=   '</table>';

    echo $message;

?>