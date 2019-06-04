<?php
//conectar el servidor con la base de datos
include("../../../config/conexion.php");
//Recuperar variables del formulario
    $id=$_REQUEST['id'];
    
$contrasena1 = isset($_POST["contrasena1"]) ? trim($_POST["contrasena1"]) : null; 
    
$contrasena2 = isset($_POST["contrasena2"]) ? trim($_POST["contrasena2"]) : null; 


$sqlContrasena1 = "SELECT * FROM clientes where cedula=$id and contrasena=MD5('$contrasena1')"; 

$result1 = $conexion->query($sqlContrasena1); 

if ($result1->num_rows> 0) { 
    
    date_default_timezone_set("America/Guayaquil"); 
    $fecha = date('Y-m-d H:i:s', time()); 
    
    $sqlContrasena2 = "UPDATE clientes " . 
                        "SET contrasena = MD5('$contrasena2'), " . 
                        "fecha_modificacion = '$fecha' " . 
                        "WHERE cedula = $id"; 
    
                        
    if ($conexion->query($sqlContrasena2) === TRUE) { 
        echo "CONTRASEÑA MODIFICADA CON ÉXITO <br>"; 
        header("Location: ../../vista/usuario/loginCliente.php");

    
    } else { 
        echo "<p>Error: " . mysqli_error($conn) . "</p>"; 
    }
    }
    else{ 
    echo "<p>La contraseña actual no coincide con nuestros registros!!! </p>"; 
    } 
    
    
    
                
    
    
    
    $conn->close(); 
    
    ?>
