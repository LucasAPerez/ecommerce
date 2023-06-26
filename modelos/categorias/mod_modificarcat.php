<?php
require '../../config/conex.php';
    $idmod=$_POST['idcategorias'];
    $catnombremod=$_POST['nombre-modificar'];
    $catdescripmod=$_POST['descripcion-modificar'];
    $mod = mysqli_query(CONN,"UPDATE `categorias` SET `categ_nombre`='$catnombremod',`descripcion`='$catdescripmod',`precio`='$preciomod',`stock`='$stockmod' WHERE id = $idmod" );
?>