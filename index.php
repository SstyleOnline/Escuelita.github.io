<?php
    include("conexion.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar seccion</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <div class="logos">
            <img src="img/CCPV niños.png" alt="">
            <h1>CCPV- Escuelita Biblica</h1>
        </div>

    </header>



    <section id="agregar">
        <div>
            <h2>Agregar</h2>
            <p>Rellenar con usuario y contraseña establecidos para acceder a la pagina de registros</p>
        </div>
        <form  method="post" id="formulario">
           <label for="usuario">
                Usuario:<br> <input type="text" name="usuario" id="usuario" required>
            </label>
           <label for="contraseña">
               Contraseña:<br> <input type="number" name="contraseña" id="contraseña" required>
            </label>
            <div id="contenedor_btn">
           <input type="submit" value="Ingresar" id="btn_ingresar" name="ingresar">
           </div>
        </form>
    </section>


</body>
</html>

<?php

if(isset($_POST['ingresar'])){

    $usuario=$_POST["usuario"];
    $contraseña=$_POST["contraseña"];

    $consulta="SELECT * FROM `usuarios` WHERE profesora='$usuario' AND contraseña='$contraseña'";

    $resultado=mysqli_query($conexion,$consulta);


    $filas=mysqli_num_rows($resultado);
    
    

    if($filas>0){

    header("Location:agregar.php");




    }else{;
        echo "<script> alert ('Error datos incorrectos'); </script>";
    }

}


?>