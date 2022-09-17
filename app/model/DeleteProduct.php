
<?php

  include_once('../../config/connect.php');


//=======================================
// 1. Eliminar Producto
//======================================

  $id = $_GET['id'];

  if ($id) {
    $sql = "DELETE FROM `products` WHERE product_id = '$id'  ";
    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        $data = array("exito" => '1');
        die(json_encode($data));
    } else {
        mysqli_close($conn);
        $data = array("error" => '1');
        die(json_encode($data));
    }
  
  }else{
    mysqli_close($conn);
    $data = array("error" => '1');
    die(json_encode($data));
  }
