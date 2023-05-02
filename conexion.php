<?php
    $servicio="aws.connect.psdb.cloud";
    $usuario="6aq2xkh3zq01jhixldkr";
    $contraseña="pscale_pw_HJ5DgmzypZpIjbJK0bhM405gW5dKw8z6GivAfjNZYA9";
    $basededatos="escuelitabiblicabd";

    $conexion= mysqli_connect($servicio,$usuario,$contraseña,$basededatos);

    if (!$conexion) {
        echo "error";
    }


?>
