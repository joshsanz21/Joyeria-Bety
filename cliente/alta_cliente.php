<?php
$nombre = $_POST['nombre'];
$apellidopaterno = $_POST['apellidopaterno'];
$apellidomaterno = $_POST['apellidomaterno'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$ciudad = $_POST['ciudad'];
$colonia = $_POST['colonia'];
$calle = $_POST['calle'];
$direccion = $_POST['direccion'];


  require_once ("../bd/conexion.php");
  mysqli_query($link, "INSERT INTO cliente (nombre,apellidopaterno,apellidomaterno,telefono,email,ciudad,colonia,calle,direccion) VALUES ('$nombre','$apellidopaterno','$apellidomaterno','$telefono','$email','$ciudad','$colonia','$calle','$direccion')");
  echo "
 
<script>
    if(confirm(\"¿DESEA REALIZAR UN NUEVO REGISTRO?\")){
                window.location.href='registrar.php';
                }else{
                window.location.href='cliente.php';
                }
 </script>";

 ?>