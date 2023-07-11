<?php 
require '../../config/conex.php';
$info = [
    'nombre' => 'elec',
    'item' => 'lalala'
];
function cargarCategoria($descripcioncat, $idcat){
    $cargar = mysqli_query(CONN, "INSERT INTO `categorias`(`categ_nombre`, `categ_descripcion`, `id_categoria`) VALUES (,'$descripcioncat','$idcat')");
}
?>