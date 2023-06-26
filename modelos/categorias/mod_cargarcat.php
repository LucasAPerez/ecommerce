<?php 
require '../../config/conex.php';
$info = [
    'nombre' => 'elec',
    'item' => 'lalala'
];
function agregar($info){
    select en la db
}
    $catnombre=$_POST['nombrecat'];
    $descripcioncat=$_POST['descripcioncat'];
    $idcat=$_POST['idcat'];
    $cargar = mysqli_query(CONN, "INSERT INTO `categorias`(`categ_nombre`, `categ_descripcion`, `id_categoria`) VALUES (,'$descripcioncat','$idcat')");
?>