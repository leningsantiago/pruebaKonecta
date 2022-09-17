<?php

include_once('../../config/connect.php');


//=======================================
// 1. Editar Productos
//======================================

$id_product = $_POST['id_product'];

$product_name = $_POST['product_name'];
$product_reference = $_POST['product_reference'];
$product_price = $_POST['product_price'];
$product_weight = $_POST['product_weight'];
$categories_fk_id = $_POST['categories_fk_id'];
$product_stock = $_POST['product_stock'];

if ($product_name and $product_reference and $product_price and $product_weight and $categories_fk_id and $product_stock) {

  $sql2 = "UPDATE `products` SET `product_name`='$product_name',`product_reference`='$product_reference',`product_price`='$product_price',`product_weight`='$product_weight',`categories_fk_id`='$categories_fk_id',`product_stock`='$product_stock' WHERE product_id = '$id_product' ";

  if (mysqli_query($conn, $sql2)) {
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


