
<?php
require_once("../bd/conexion.php");
$claveproducto = $_POST['claveproducto'];
$nombre = $_POST['nombre'];
$stock = $_POST['stock'];
$precioactual = $_POST['precioactual'];
$categoria = $_POST['categoria'];
$proveedor = $_POST['proveedor'];





  mysqli_query($link,"UPDATE productos set nombre='$nombre',stock='$stock',precioactual='$precioactual',categoria='$categoria',proveedor='$proveedor' where claveproducto='$claveproducto'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados');
                document.location='producto.php';
                </script>";
?>