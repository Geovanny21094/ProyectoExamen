<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    include("conexion.php");
    //$cedula=$_POST['cedula'];
    //$nombre=$_POST['nombre'];
   // $apellido=$_POST['apellido'];
  //  $edad=$_POST['edad'];
  //  $direccion=$_POST['direccion'];
   // $correo=$_POST['correo'];
    //incluir conexión a la base de datos
    

     $cedula = $_GET['cedula'];
    
    $resultado = mysql_query("SELECT * FROM formulario WHERE cedula ='$cedula'");
if (!$resultado) {
    echo 'No se pudo ejecutar la consulta: ' . mysql_error();
    exit;
}
while ($resul = mysql_fetch_row($resultado)) { 
    
 
    $nombre=$resul[1];
    $apellido=$resul[2];
    $edad=$resul[3];
    $direccion=$resul[4];
    $correo=$resul[5];
    /**
    echo($nombre);
    echo($apellido);
    echo($edad);
    echo($direccion);
    echo($correo);
    **/
}
?>  
</body>
</html>