<?php
$nombre = $_POST['nombre'];
$stock = $_POST['stock'];
$precioactual = $_POST['precioactual'];
$categoria = $_POST['categoria'];
$proveedor = $_POST['proveedor'];


  require_once ("../bd/conexion.php");
  mysqli_query($link, "INSERT INTO productos (nombre,stock,precioactual,categoria,proveedor) VALUES ('$nombre','$stock','$precioactual','$categoria','$proveedor')");
  echo "
 
<script>
    if(confirm(\"¿Desea realizar un nuevo registro?\")){
                window.location.href='registrar.php';
                }else{
                window.location.href='producto.php';
                }
 </script>";

 ?>