<!DOCTYPE html>
 <?php
    session_start();
    if(isset($_SESSION['usuario'])){
       // echo "sesion exitosa - bienvenido";
    }else{
        header("location: ../../../public/vista/");
    }

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PEDIDO CLIENTE </title>
<link href="../../../css/pedidoCliente.css" rel="stylesheet" type="text/css" />

<script src="../../../js/Factura.js">
</script>
</head>

<body onLoad="obtenerFechaActual()">

<div class="cajap">

        <div id="inicio " class="cajabarra">
            <div class="cajaloguito">
            <a href="#inicio"> <img src="../../../imagenes/fot.png"></a>
        </div>

</div>


<header> 
<h1>DATOS DEL PEDIDO </h1>
</header>

<form id="factura">

<table  style="width:100%">
 <tr>
    <th width="10%">FECHA ACTUAL :</th>
    <td width="15%" ><input id="fechaActual" type="text" disabled class="tabtexto"> </td>
    <th width="20%" ># DE PEDIDO :</th>
    <td width="15%"><input id="numFactura" type="text" disabled class="tabtexto"></td>
  </tr>
</table>

<?php 
include("../../../config/conexion.php");
    
$usuario=$_SESSION['usuario'];
$sql="SELECT * FROM clientes WHERE email = '$usuario' ";

//Enviar una consulta MySQL
$result=$conexion->query($sql); 
 //Recupera una fila de resultados como un array asociativo
$resultarr=mysqli_fetch_assoc($result);
//Obtnemos el valo de una fila especifico
$cedula=$resultarr["cedula"];
$nombres = $resultarr["nombre"];
$apellidos = $resultarr["apellido"];
$correo = $resultarr["email"];

$telefono = $resultarr["telefono"];
$direccion = $resultarr["direccion"];


//$nombreCompleto=$nombres. '  '.$apellidos;


?>


<table style="width:100%">
<header> 
<h1>DATOS DEL CLIENTE </h1>
</header>

 <tr>
    <th width="15%">Cédula:</th>
    <td> <input type="text" class="tabtexto" value="<?php echo $cedula ?>"> </td>
  </tr>
  <tr>
    <th>Nombres:</th>
    <td width="25%"><input type="text" class="tabtexto" value="<?php echo $nombres ?>"> </td>
    <th width="10%" > Apellidos:</th>
    <td width="28%"><input type="text" class="tabtexto" value="<?php echo $apellidos ?>"> </td>
  </tr>
  <tr>
    <th >Telf/Cel:</th>
    <td > <input type="text" class="tabtexto" value="<?php echo $telefono ?>"> </td>
    <th> Dirección:</th>
    <td><input type="text" class="tabtexto" value="<?php echo $direccion ?>"></td>
  </tr>
  <tr>
    <th> Correo electrónico:</th>
    <td><input type="text" class="tabtexto" value="<?php echo $correo?>"></td>
  </tr>
</table>


<table  style="width:100%" id="tabladet">
<header> 
<h1>DETALLES DEL PEDIDO </h1>
</header>
	<tr>
		<th >Descripcion del producto</th>
		<th>Precio Unitario</th>
		<th>Cantidad</th>
		<th>Precio Total</th>
	</tr>
	<tr id="filas">
		<td ><input type="text" id ="concepto" placeholder="Ingrese la descripcion del producto" class="tabtexto"></td>
		<td><input type="text" id ="preciou"  placeholder="0" class="tabtexto"></td>
		<td><input type="text" id ="cantidad" placeholder="0" class="tabtexto"></td>
		<td><input type="text" id ="ptotal" placeholder="0" class="tabtexto" disabled ></td>
	</tr>
</table>

<table  style="width:50%" id="tablaTotal">
<caption ><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOTAL </b></caption>
 <tr>
    <th width="6%">Subtotal</th>
    <td width="6.5%"><input  id= "subtot" placeholder="0" class="tabtexto" disabled></td>
  </tr>
  <tr>
    <th width="5%" >IVA 12% </th>
    <td><input id= "iva" placeholder="0" class="tabtexto" disabled></td>
  </tr>
  <tr>
   <th width="5%" >Total</th>
   <td width= "5%"><input id="total" placeholder="0" class="tabtexto" disabled></td>
  </tr>
</table>

<input class="btnAniadir" type="button" value="Añadir Linea" onClick="agregarFila()" >
<input class="btnEliminar" type="button" value="Eliminar Linea" onClick="eliminarFila()">
<input class="btnCalcular" type="button" value="Calcular" onClick="calcularPrecioTotal()"> 
</form>
</body>
</html>
