<?php
    include("conexion.php");

    $consulta="SELECT * FROM datos ORDER BY clase";

    $resulta=mysqli_query($conexion,$consulta);




    if (isset($_POST['busqueda_btn'])) {

        $nombre=$_POST["nombre"];
        $clase=$_POST["clase"];

        $busqueda="SELECT * FROM `datos` WHERE nombre='$nombre' AND clase='$clase'";

        $resulta=mysqli_query($conexion,$busqueda);
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="mostrar.css">
    
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


    <section id="datos_tabla">
        <div id="busqueda_conteiner">
            <label for="">Buscar: </label>

            <form action="mostrar.php" method="post">
                <input type="text" name="nombre" id="busqueda" placeholder="Ingresar nombre de alumno">
                <select name="clase" id="clase">
                    <option value="Seleccionar">Seleccionar</option>
                    <option value="De 3 a 4 años">De 3 a 4 años</option>
                    <option value="De 6 a 8 años">De 6 a 8 años</option>
                    <option value="De 9 a 11 años">De 9 a 11 años</option>
                </select>
                <input type="submit" name="busqueda_btn" id="busqueda_btn" value="Buscar">
                <input type="submit" value="Todos" name="todos">
            </form>
        
        </div>
        <div id="datos">
            <div class="campos">
                <p>Nombre</p>
                <p>Apellido</p>
                <p>Fecha de nacimiento</p>
                <p>Edad</p>
                <p>Direccion</p>
                <p>Nombre del padre</p>
                <p>Nombre del padre</p>
                <p>Contacto</p>
                <p>Profesora a cargo</p>
                <p>Clase</p>
            </div>

            <?php  while ($row=mysqli_fetch_assoc($resulta)) {?>
            <div class="campos_bd">
                <p><?php echo $row["nombre"]?></p>
                <p><?php echo $row["apellido"]?></p>
                <p><?php echo $row["fecha"]?></p>
                <p><?php echo $row["edad"]?></p>
                <p><?php echo $row["direccion"]?></p>
                <p><?php echo $row["npadre"]?></p>
                <p><?php echo $row["nmadre"]?></p>
                <p><?php echo $row["contacto"]?></p>
                <p><?php echo $row["profesora"]?></p>
                <p><?php echo $row["clase"]?></p>
            </div>
            <?php }?>
        </div>
    </section>
    
</body>
</html>
