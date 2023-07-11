<?php
include($_SERVER['DOCUMENT_ROOT'] . "/proyecto/ecommerce/modelos/productos/mod_cargar.php");
// echo "ruta de server: ";
// print_r($_SERVER['DOCUMENT_ROOT']);
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $precio=$_POST['precio'];
    $idcategoria=$_POST['idcategoria'];
    $stock=$_POST['stock'];
if($$cargar) {
    echo json_encode(["ok"=>true, "cargar"=>$$cargar]);
}
// include($_SERVER['DOCUMENT_ROOT']);
?>