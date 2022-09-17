<?php

// connect database
//  ======== conexion a nuestra base de datos ==========
$serverName = "127.0.0.1";//localhost
$userName = "root"; //root
$password = "";

$dbName = "bd_cafeteria";
//$dbName = "cursoprogramacion";

// ======= crear la conexion =======
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

// ======= chequear la conexion ========
if (!$conn) {
  $data = array("error" => '3');
  die(json_encode($data));
}




?>
