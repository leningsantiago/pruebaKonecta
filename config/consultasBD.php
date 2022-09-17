<?php

//CONSULTA CATEGORIAS
$consultaCategorias = "SELECT * FROM `categories`;";
$categorias = mysqli_query($conn, $consultaCategorias);

//CONSULTA PRODUCTOS
$consultaProductos = "SELECT * FROM `products` p INNER JOIN categories c ON p.categories_fk_id = c.category_id ORDER BY p.product_id DESC";
$productos = mysqli_query($conn, $consultaProductos);

//CONSULTA LAS VENTAS
$consultaVentas = "SELECT * FROM `sales` ORDER by sales_create_date ASC ;";
$ventas = mysqli_query($conn, $consultaVentas);


?>