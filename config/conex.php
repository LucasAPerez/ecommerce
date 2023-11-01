<?php 

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dbName = "ropero";

define("CONN", mysqli_connect($serverName, $dBUsername, $dBPassword, $dbName));

if(!CONN) {
    die("Conexion fallida" . mysqli_connect_error());
}

?>