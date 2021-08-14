
<?php
require_once("../bd/conexion.php");
$id_proveedor = $_POST['id_proveedor'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion= $_POST['direccion'];





  mysqli_query($link,"UPDATE proveedor set nombre='$nombre',telefono='$telefono',direccion='$direccion'where id_proveedor='$id_proveedor'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='proveedor.php';
                </script>";
?>