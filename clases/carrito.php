<?php 

require '../config/config.php'

if(isset($_POST['id']){

|       if(isset($_SESSION['carrito']['productos'][$id])){
        $_SESSION['carrito']['productos'][$id] += 1;
        } else {
            $_SESSION['carrito']['productos'][$id] = 1;
        }
        $datos['numero'] = count($_SESSION['carrito']['productos'])
        $datos['ok'] = true;
        
}
echo json_encode($datos)
)
?>