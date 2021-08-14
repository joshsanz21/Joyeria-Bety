<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];


  require_once ("../bd/conexion.php");
  mysqli_query($link, "INSERT INTO proveedor (nombre,telefono,direccion) VALUES ('$nombre','$telefono','$direccion')");
  echo "
 
<script>
    if(confirm(\"¿Desea realizar un nuevo registro?\")){
                window.location.href='registrar.php';
                }else{
                window.location.href='proveedor.php';
                }
 </script>";

 ?>