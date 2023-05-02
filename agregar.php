<?php
    include("conexion.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <div class="logos">
            <img src="img/CCPV niños.png" alt="">
            <h1>CCPV- Escuelita Biblica</h1>
        </div>

        <nav class="navegacion">
            <ul>
                <li><a href="agregar.php">Agregar</a></li>
                <li><a href="mostrar.php">Buscar</a></li>
                <li><a href="ver.php">Ver</a></li>
            </ul>
        </nav>
    </header>



    <section id="agregar">
        <div>
            <h2>Agregar</h2>
            <p>Rellenar el formulario ingresando los datos del niño</p>
        </div>
        <form  method="post" id="formulario">
           <label for="nombre">
                Nombre:<br> <input type="text" name="nombre" id="nombre" required>
            </label>
           <label for="apellido">
               Apellido:<br> <input type="text" name="apellido" id="apellido" required>
            </label>
           <label for="fecha">
              Fecha de nacimiento:<br> <input type="date" name="fecha" id="fecha" required>
            </label>
            <label for="edad">
              Edad:<br> <input type="number" name="edad" id="edad" required>
            </label>
           <label for="direccion">
              Direccion:<br> <input type="text" name="direccion" id="direccion" required>
            </label>
           <label for="npadre">
             Nombre del Padre:<br> <input type="text" name="npadre" id="npadre">
            </label>
           <label for="nmadre">
             Nombre de la Madre:<br> <input type="text" name="nmadre" id="nmadre">
            </label>
           <label for="contacto">
             Numero de contacto:<br> <input type="number" name="contacto" id="contacto" required>
            </label>

           <label for="clase">Clase: <br>
            <select name="clase" id="" value="Seleccionar" required>
                <option value="Seleccionar">Seleccionar</option>
                <option value="De 3 a 5 años">De 3 a 5 años</option>
                <option value="De 6 a 8 años">De 6 a 8 años</option>
                <option value="De 9 a 11 años">De 9 a 11 años</option>
            </select>
           </label>

           <div id="contenedor_btn">
            <input type="reset" value="Resetear Formulario" id="btn_resetear">
           <input type="submit" value="Cargar Datos" id="btn_enviar" name="registrarse">
           </div>
        </form>
    </section>


</body>
</html>

<?php

if(isset($_POST['registrarse'])){

    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $fecha=$_POST["fecha"];
    $edad=$_POST["edad"];
    $direccion=$_POST["direccion"];
    $npadre=$_POST["npadre"];
    $nmadre=$_POST["nmadre"];
    $contacto=$_POST["contacto"];
    $clase=$_POST["clase"];


    if($clase=="De 3 a 5 años"){
        $profesora="Silvi del carmen Fernández";
    }
    else if($clase=="De 6 a 8 años"){
        $profesora="Soledad Sosa";
    }
    else if($clase=="De 9 a 11 años"){
        $profesora="Romina Loiacono";
    }


    $insertar="INSERT INTO `datos`(`nombre`, `apellido`, `fecha`, `edad`, `direccion`, `npadre`, `nmadre`, `contacto`, `profesora`, `clase`) VALUES ('$nombre','$apellido','$fecha','$edad','$direccion','$npadre','$nmadre','$contacto','$profesora','$clase')";
    $resultado=mysqli_query($conexion,$insertar);

    if ($resultado) {
        echo "<script> alert ('Registro listo'); </script>";
    }

}


?>