<?php
include($_SERVER['DOCUMENT_ROOT'] . "/proyecto/ecommerce/config/conex.php");
// require '../../config/conex.php';
function obtenerProductos() {
    $productos = [];
    $catalogo = mysqli_query(CONN, "SELECT * from ecomercio");
    while($row = mysqli_fetch_assoc($catalogo)) {
        // print_r($row);
        array_push($productos, $row);
    }
    return $productos;
}
echo json_encode(obtenerProductos())
?>