<?php
require '../../config/conex.php';
    $idborrar=$_POST['idborrar'];
    $borrar= mysqli_query(CONN, "DELETE FROM `categorias` WHERE idcategorias= $idborrar");
    if($borrar){
        echo 'Su producto se elimino correctamente';
    }
?>