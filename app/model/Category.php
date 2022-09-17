<?php

  include_once('../../config/connect.php');


//=======================================
// 1. Registrar Categoria
//======================================

  $name = $_POST['name_category'];

  if ($name) {
    $sql = "INSERT INTO `categories`(`name_category`) VALUES ('$name')";
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
