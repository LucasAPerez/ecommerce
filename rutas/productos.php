<?php
include($_SERVER['DOCUMENT_ROOT'] . "/proyecto/ecommerce/modelos/productos/mod_catalogo.php");
// echo "ruta de server: ";
// print_r($_SERVER['DOCUMENT_ROOT']);
$productos = obtenerProductos();
if($productos) {
    echo json_encode(["ok"=>true, "productos"=>$productos]);
}
// include($_SERVER['DOCUMENT_ROOT']);
?>