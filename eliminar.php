<?php
    include("conexion.php");



   $id=$_GET["id"];

   $borrar= "DELETE FROM `datos` WHERE id='$id'";

   $respuesta= mysqli_query($conexion,$borrar);


   header("Location: ver.php");


?>