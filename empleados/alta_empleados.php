<?php
$curp = $_POST['curp'];
$fecha_nac = $_POST['fecha_nac'];
$direccion = $_POST['direccion'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$telefono = $_POST['telefono'];


  require_once ("../bd/conexion.php");
  mysqli_query($link, "INSERT INTO empleados
(curp,fecha_nac,direccion,nombre,apellidos,email,sexo,telefono) VALUES ('$curp','$fecha_nac','$direccion','$nombre','$apellidos','$email','$sexo','$telefono')");
  echo "
 
<script>
    if(confirm(\"¿DESEA REALIZAR UN NUEVO REGISTRO?\")){
                window.location.href='registrar.php';
                }else{
                window.location.href='empleados.php';
                }
 </script>";

 ?>