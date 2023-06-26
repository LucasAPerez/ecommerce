<?php
require '../../config/conex.php';
    $idborrar=$_POST['idborrar'];
    $borrar= mysqli_query(CONN, "DELETE FROM `ecomercio` WHERE id= $idborrar");
    if($borrar){
        echo 'Su producto se elimino correctamente';
        ty6tft
    }

?>