<?php





include_once('../../config/connect.php');


//=======================================
// 1. Registrar Productos
//======================================


$listProduct = $_POST['listProduct'];
$price = $_POST['price'];
$cantidadProduct = $_POST['cantidadProduct'];




if ($listProduct and $cantidadProduct) {

  //CONSULTA PRODUCTOS
  $consultaProductos = "SELECT *  FROM `products`  WHERE product_id = '$listProduct' ";
  $productos = mysqli_query($conn, $consultaProductos);

  while ($data = mysqli_fetch_array($productos)) {
    
    $product_id = $data['product_id'];
    $product_stock = $data['product_stock'];

    if ($product_stock >= $cantidadProduct) {
        $product_stock_real = $product_stock - $cantidadProduct;

        $editProducts = "UPDATE `products` SET `product_stock`='$product_stock_real' WHERE product_id = '$product_id' ";
        $ejecutar = mysqli_query($conn, $editProducts);

        
        $sql2 = "INSERT INTO `sales`(`product_id`, `price`, `sales_amount`) VALUES ('$listProduct','$price','$cantidadProduct')";

        if (mysqli_query($conn, $sql2)) {
            mysqli_close($conn);
            $data = array("exito" => '1');
            die(json_encode($data));
        }

    }else{
        mysqli_close($conn);
        $data = array("error" => '4');
        die(json_encode($data));
    }

  }

}else{
  mysqli_close($conn);
  $data = array("error" => '1');
  die(json_encode($data));
}