<?php
require '../config/conex.php';

    if(isset($_POST['modificar'])){
    $idmod=$_POST['idmodificar'];
    $nombremod=$_POST['nombre-modificar'];
    $descripmod=$_POST['descripcion-modificar'];
    $preciomod=$_POST['precio-modificar'];
    $stockmod=$_POST['stockmodificar'];
    $mod = mysqli_query(CONN,"UPDATE `ecomercio` SET `nombre`='$nombremod',`descripcion`='$descripmod',`precio`='$preciomod',`stock`='$stockmod' WHERE id = $idmod" );
    }

    if(isset($_POST['borrar'])){
        $idborrar=$_POST['idborrar'];
        $borrar= mysqli_query(CONN, "DELETE FROM `ecomercio` WHERE id= $idborrar");
        if($borrar){
            echo 'Su producto se elimino correctamente';
        }
    
    }
    if(isset($_POST['cargar'])){
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $precio=$_POST['precio'];
        $idcategoria=$_POST['idcategoria'];
        $stock=$_POST['stock'];
        $cargar = mysqli_query(CONN, "INSERT INTO `ecomercio`(`nombre`, `descripcion`, `precio`, `id_categoria`, `stock`, `activo`) VALUES ('$nombre','$descripcion','$precio','$idcategoria','$stock','1')");
    }

?>