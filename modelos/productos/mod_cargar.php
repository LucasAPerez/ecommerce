<?php 
require '../../config/conex.php';
    // $nombre=$_POST['nombre'];
    // $descripcion=$_POST['descripcion'];
    // $precio=$_POST['precio'];
    // $idcategoria=$_POST['idcategoria'];
    // $stock=$_POST['stock'];
    // LAs llamadas  post o get van en la ruta
    function agregar($nombre, $descripcion, $precio, $idcategoria, $stock) {
        $cargar = mysqli_query(CONN, "INSERT INTO `ecomercio`(`nombre`, `descripcion`, `precio`, `id_categoria`, `stock`, `activo`) VALUES ('$nombre','$descripcion','$precio','$idcategoria','$stock','1')");

    }
?>