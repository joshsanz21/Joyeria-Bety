
<?php
require_once("../bd/conexion.php");
$id_clientes = $_POST['id_clientes'];
$nombre = $_POST['nombre'];
$apellidopaterno = $_POST['apellidopaterno'];
$apellidomaterno = $_POST['apellidomaterno'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$ciudad = $_POST['ciudad'];
$colonia = $_POST['colonia'];
$calle = $_POST['calle'];
$direccion = $_POST['direccion'];




  mysqli_query($link,"UPDATE cliente set nombre='$nombre',apellidopaterno='$apellidopaterno',apellidomaterno='$apellidomaterno',telefono='$telefono',email='$email',ciudad='$ciudad',colonia='$colonia',calle='$calle',direccion='$direccion' where id_clientes='$id_clientes'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados');
                document.location='cliente.php';
                </script>";
?>