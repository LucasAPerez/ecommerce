<?php
require '../../config/conex.php';
    $idmod=$_POST['idmodificar'];
    $nombremod=$_POST['nombre-modificar'];
    $descripmod=$_POST['descripcion-modificar'];
    $preciomod=$_POST['precio-modificar'];
    $stockmod=$_POST['stockmodificar'];
    $mod = mysqli_query(CONN,"UPDATE `ecomercio` SET `nombre`='$nombremod',`descripcion`='$descripmod',`precio`='$preciomod',`stock`='$stockmod' WHERE id = $idmod" );

?>