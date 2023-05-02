<?php
    include("conexion.php");


    $consulta3a5="SELECT * FROM datos WHERE clase='De 3 a 5 años' ORDER BY edad";
    $consulta9a11="SELECT * FROM datos WHERE clase='De 9 a 11 años' ORDER BY edad";
    $consulta6a8="SELECT * FROM datos WHERE clase='De 6 a 8 años' ORDER BY edad";

    $resultado3=mysqli_query($conexion,$consulta3a5);
    $resultado6=mysqli_query($conexion,$consulta6a8);
    $resultado9=mysqli_query($conexion,$consulta9a11);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver</title>
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


    <section id="datos_tabla" id="tres">
        <p>Clase de 3 a 5</p>
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
                <p>Borrar</p>
            </div>

            <?php  while ($row=mysqli_fetch_assoc($resultado3)) {?>
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
                <a href="eliminar.php?id=<?php echo $row["id"]?>">Eliminar</a>
            </div>
            <?php }?>
        </div>
    </section>
    
    
    <section id="datos_tabla" id="seis">
        <p>Clase de 6 a 8</p>
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
                <p>Borrar</p>
            </div>

            <?php  while ($row=mysqli_fetch_assoc($resultado6)) {?>
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
                <a href="eliminar.php?id=<?php echo $row["id"]?>">Eliminar</a>
            </div>
            <?php }?>
        </div>
    </section>


    <section id="datos_tabla" id="nueve">
        <p>Clase de 9 a 11</p>
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
                <p>Borrar</p>
            </div>

            <?php  while ($row=mysqli_fetch_assoc($resultado9)) {?>
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
                <a href="eliminar.php?id=<?php echo $row["id"]?>">Eliminar</a>
            </div>
            <?php }?>
        </div>
    </section>



    
    
</body>
</html>
