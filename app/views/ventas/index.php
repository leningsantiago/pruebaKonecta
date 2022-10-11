<?php
require_once('../../../config/connect.php');
require_once('../../../config/consultasBD.php');
?>
<!DOCTYPE html>

<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Prueba Konecta</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../../src/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../../../src/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../../src/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../../src/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../../src/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../../src/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <!-- <link rel="stylesheet" href="../../../src/assets/vendor/libs/apex-charts/apex-charts.css" /> -->

    <!-- DATABLES -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- DATATABLES EXCEL -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../../src/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../../src/assets/js/config.js"></script>


  </head>

  <style>
    .dt-button {
      padding: 0 !important;
      border: none !important;
    }
  </style>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="index.html" class="app-brand-link">
                    <span class="app-brand-logo demo">
                        <i class='menu-icon bx tf-icons bx-store'></i>
                    </span>
                    <span class="app-brand-text demo menu-text fw-bolder ms-2">Cafeteria</span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Productos -->
                <li class="menu-item ">
                    <a href="../productos/" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Productos</div>
                    </a>
                </li>
                <!-- Gestión -->
                <li class="menu-item">
                    <a href="../gestion/gestion.php" class="menu-link">
                        <i class='menu-icon tf-icons bx bxs-edit'></i>
                        <div data-i18n="Layouts">Gestión</div>
                    </a>
                </li>
                <!-- Ventas -->
                <li class="menu-item active">
                    <a href="../ventas/" class="menu-link">
                        <i class='menu-icon tf-icons bx bx-cart-alt'></i>
                        <div data-i18n="Layouts">Ventas</div>
                    </a>
                </li>

         
            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
        <!-- Navbar -->
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>

            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class='menu-icon tf-icons bx bx-clipboard' style="color: #6A6DFF;"></i>

                VENTAS
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                  <i class='bx bx-user-circle' style="font-size: 40px;"></i>
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <i class='bx bx-user-circle' style="font-size: 40px;"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">User</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-cog me-2"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Ventas</span></h4> -->

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">VENTA DE PRODUCTOS</h5>
                    </div>
                    <div class="card-body">
                      <form id="ventasProducts">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Lista de productos</label>
                            <div class="col-sm-10">
                                <select name="listProduct" id="productList" class="form-control ">
                                <option hidden>SELECCIONAR</option>
                                <?php foreach ($productos as $producto) { ?>
                                    <option value="<?php echo $producto['product_id']  ?>"><?php echo $producto['product_name'] ?></option>
                                <?php } ?>
                                </select>                         
                            </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">PRECIO</label>
                          <div class="col-sm-10">
                            <input
                              type="number"
                              name="price"
                              class="form-control"
                              id="basic-default-company"
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">CANTIDAD</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="number"
                                name="cantidadProduct"
                                id="basic-default-email"
                                class="form-control"
                              />
                            </div>
                          </div>
                        </div>
                    
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">VENDER</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Basic with Icons -->
                <div class="col-xxl">
                <div class="row">
                <div class="card">
                    <h5 class="card-header">LISTA DE VENTAS</h5>
                    <div class="table-responsive text-nowrap">
                    <table class="table pt-3" id="table_1">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>PRODUCT_ID</th>
                            <th>PRODUCT NAME</th>
                            <th>PRICE</th>
                            <th>SALES_AMOUNT</th>
                            <th>sales_create_date</th>
                          
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        <?php foreach ($ventas as $venta) { ?>                         
                        <tr>

                            <td><?php echo $venta['sales_id'] ?></td>
                            <td><?php echo $venta['product_id'] ?></td>
                            <td><?php echo $venta['product_name'] ?></td>
                            <td><?php echo $venta['price'] ?></td>
                            <td><?php echo $venta['sales_amount'] ?></td>
                            <td><?php echo $venta['sales_create_date'] ?></td>

                        </tr>
                        <?php } ?>
                    
                        </tbody>
                    </table>
                    </div>
                    </div>
                </div>
                </div>
              </div>
            </div>
          <!-- / Content -->
          
          <!-- Modales -->
          <dib id="modal_editProducts"></dib>
          <!-- Modal Eliminar -->
          <dib id="modal_deleteProducts"></dib>



          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">


            </div>
          </footer>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
</div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../../src/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../../src/assets/vendor/libs/popper/popper.js"></script>
    <script src="../../../src/assets/vendor/js/bootstrap.js"></script>
    <script src="../../../src/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../../../src/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../../src/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../../../src/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../../src/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <!-- TATABLES EXCEL -->
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

    
    <script src="../../../src/scripts/jquery.validate.js"></script>
    <script src="../../controllers/productsController.js"></script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Funciones para la tadatable -->
    <script>
      $(document).ready( function () {
          var table = $('#table_1').DataTable({
            dom: 'Bfrtip',
      
            buttons: [{
                //Botón para Excel
                extend: 'excel',
                footer: true,
                title: 'PRODUCTOS',
                filename: 'PRODUCTOS',

                //Aquí es donde generas el botón personalizado
                text: '<button class="btn btn-success ">Excel <i class="fas fa-file-excel"></i></button>'
              },
              //Botón para PDF
              {
                extend: 'pdf',
                footer: true,
                title: 'PRODUCTOS',
                filename: 'PRODUCTOS',
                text: '<button class="btn btn-danger ">PDF <i class="far fa-file-pdf"></i></button>'
              }
            ],
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "pageLength": 5
        
        });
      });
    </script>

    <!-- Funciones para modales -->
    <script>

       function editProducts(id) {
          var ruta = '../../includes/editProductModal.php?id=' + id;
          $.get(ruta, function(data) {
            $('#modal_editProducts').html(data);
            $('#editModalProduct').modal('show');
          });
        }

       function deleteProducts(id) {
        const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
          },
          buttonsStyling: false
        })
        
        swalWithBootstrapButtons.fire({
          title: 'Estas seguro?',
            text: "No podrás revertir esto!",
            type: 'warning',
          showCancelButton: true,
          confirmButtonText: 'SI, ELIMINAR!',
          cancelButtonText: 'NO, CANCELAR!',
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
             type: "POST",
             url: "../../model/DeleteProduct.php?id=" + id,
             dataType: "json",
             data: $(this).serialize(),
             success: function (respuesta) {
                 if (respuesta.error == 1) {
                     Swal.fire({
                         icon: 'error',
                         title: 'Oops...',
                         text: 'Campo vacios o categoria duplicada.',
                     })
                 }
                 if (respuesta.exito == 1) {
                  Swal.fire(
                        'ELIMINADO!',
                        'PRODUCTO ELIMINADO',
                        'success'
                      )
                     setTimeout(function () {
                         location.reload();
                     }, 1500);
                 }
             },
         });
           
          } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
          ) {
            swalWithBootstrapButtons.fire(
              'Cancelled',
              'Proceso Cancelado.',
              'error'
            )
          }
        })
      }
    </script>



    <script>
        $(document).on('change', '#productList', function(event) {
            $("#productList option:selected").each(function() {
                id = $(this).val();
                $.get("../../model/PrecioProduct.php", { id }, function(data) {
           
                            const obj = JSON.parse(data);

                            precio = obj.price.product_price;

                            entero = parseInt(precio);
                     
                    $("input[name = 'price']").val(precio);

                    
                });
            });

        });
    </script>

  </body>
</html>