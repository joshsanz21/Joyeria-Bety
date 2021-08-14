
<?php
require_once("../bd/conexion.php");
$id_empleados = $_POST['id_empleados'];

$curp= $_POST['curp'];
$fecha_nac = $_POST['fecha_nac'];
$direccion = $_POST['direccion'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$telefono = $_POST['telefono'];





  mysqli_query($link,"UPDATE empleados set curp='$curp',fecha_nac='$fecha_nac',direccion='$direccion',nombre='$nombre',apellidos='$apellidos',email='$email',sexo='$sexo',telefono='$telefono' where id_empleados='$id_empleados'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados');
                document.location='empleados.php';
                </script>";
?>