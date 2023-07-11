<?php 
include($_SERVER['DOCUMENT_ROOT'] . "/proyecto/ecommerce/modelos/categorias/mod_borrarcat.php");
$idborrar=$_POST['idborrar'];
$borrar = agregar();
if($borrar) {
    echo json_encode(["ok"=>true, "borrar"=>$borrar]);
}
?>