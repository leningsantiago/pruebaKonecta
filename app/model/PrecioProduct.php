
<?php

  include_once('../../config/connect.php');


//=======================================
// 1. Registrar Categoria
//======================================

    $id = $_GET['id'];

    $sql = "SELECT product_price FROM `products` WHERE product_id = '$id'";
      
    $result = mysqli_query($conn,$sql);

    $precio = mysqli_fetch_array($result);

    $data['price'] = $precio;

    echo json_encode($data);

