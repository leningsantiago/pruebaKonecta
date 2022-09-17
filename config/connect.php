<?php

// connect database

// class Database {
//     private $hostname = "localhost";
//     private $database = "bd_cafeteria";
//     private $username = "root";
//     private $password = "";
//     private $charset = "utf8";


//     function connect(){
//         try {
//             $conexion = "mysql:host=".$this->hostname.";dbname=".$this->database.";
//             charset=".$this->charset;
//             $options = [
//                 PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
//                 PDO::ATTR_EMULATE_PREPARES => false,
//             ];

//             $pdo = new PDO($conexion, $this->username, $this->password, $options);

//             return $pdo;
//         } catch (PDOException $e) {
//             echo 'Error conexion '. $e->getMessage();
//             exit;
//         }
//     }
// }

//  ======== conexion a nuestra base de datos ==========
$serverName = "127.0.0.1:3305";
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