<?php
  require_once('../../config/connect.php');
  require_once('../../config/consultasBD.php');


  $id = $_GET['id'];
  
  //CONSULTA PRODUCTOS
  $consultaProductos = "SELECT *,c.name_category AS nameCategory FROM `products` p INNER JOIN categories c ON p.categories_fk_id = c.category_id  WHERE p.product_id = '$id'  ORDER BY p.product_id DESC";
  $productos = mysqli_query($conn, $consultaProductos);

  while ($data = mysqli_fetch_array($productos)) {
    
    $product_id = $data['product_id'];
    $product_name = $data['product_name'];
    $product_reference = $data['product_reference'];
    $product_price = $data['product_price'];
    $product_weight = $data['product_weight'];
    $categories_fk_id = $data['categories_fk_id'];
    $product_stock = $data['product_stock'];
    $name_category = $data['name_category'];
    $category_id = $data['category_id'];

   

  }
?>
<!-- Modal -->
<div class="modal fade" id="editModalProduct" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">EDITAR PRODUCTO <span
                        class="alert-primary"><?php  echo $product_name;  ?></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form id="edit_producto">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">NOMBRE PRODUCTO</label>
                            <input type="text" class="form-control" id="basic-default-fullname"
                                value="<?php echo $product_name ?>" name="product_name" />
                            <input type="hidden" name="id_product" value="<?php echo $product_id ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">REFERENCIA</label>
                            <input type="text" class="form-control" id="basic-default-company"
                                value="<?php echo $product_reference ?>" name="product_reference" />
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-default-company">PRECIO</label>
                            <input type="number" class="form-control" id="basic-default-company"
                                value="<?php echo $product_price ?>" name="product_price" />
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-default-company">PESO</label>
                            <input type="number" class="form-control" id="basic-default-company"
                                value="<?php echo $product_weight ?>" name="product_weight" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">CATEGORIAS</label>
                            <select name="categories_fk_id" class="form-control ">
                                <option value="<?php echo $category_id ?>"><?php echo $name_category ?></option>
                                <?php foreach ($categorias as $categoria) {?>
                                <option value="<?php echo $categoria['category_id'] ?>">
                                    <?php echo $categoria['name_category'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">STOCK</label>
                            <input type="number" id="basic-default-phone" value="<?php echo $product_stock ?>"
                                name="product_stock" class="form-control phone-mask" />
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                CERRAR
                            </button>
                            <button type="submit" class="btn btn-primary">GUARDAR CAMBIOS</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
