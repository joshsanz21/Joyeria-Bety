<?php
require_once("../bd/conexion.php");
$opcion = $_GET['opcion'];

    
    $result=mysqli_query($link,"DELETE from productos where claveproducto='$opcion'");
    if(mysqli_affected_rows($link)!=0)
    {
      echo "<script language='JavaScript'>
      alert('Registro eliminado...');
      document.location='producto.php';
      </script>";
    }
?>