<?php
  require_once('../../../config/connect.php');
  require_once('../../../config/consultasBD.php');
?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
  data-assets-path="src/assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Prueba Konecta</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../../../src/assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />


  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../../../src/assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../../../src/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../../../src/assets/vendor/css/theme-default.css"
    class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../../../src/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../../../src/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="../../../src/assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../../../src/assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../../../src/assets/js/config.js"></script>
</head>

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
          <!-- Dashboard -->
          <li class="menu-item">
            <a href="../productos/" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Productos</div>
            </a>
          </li>
          <!-- Layouts -->
          <li class="menu-item active">
            <a href="./gestion.php" class="menu-link">
              <i class='menu-icon tf-icons bx bxs-edit'></i>
              <div data-i18n="Layouts">Gestión</div>
            </a>
          </li>

          <!-- Ventas -->
          <li class="menu-item">
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
        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>

            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class='bx bx-list-ul fs-4 lh-0 p-2' style="color: #6A6DFF;"></i>
                Gestión
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
                    <a class="dropdown-item" href="auth-login-basic.html">
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
            <div class="row">

              <div class="col-xl">
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Registrar Categorias</h5>
                  </div>
                  <div class="card-body">
                    <form id="registrar_categorias">
                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Nombre Categoria</label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-fullname2" class="input-group-text"><i
                              class='bx bx-checkbox-checked' style="font-size: 25px;"></i></span>
                          <input type="text" name="name_category" class="form-control" id="basic-icon-default-fullname"
                            placeholder="Pasteles" aria-describedby="basic-icon-default-fullname2" />
                        </div>
                      </div>

                      <button type="submit" class="btn btn-primary">REGISTRAR</button>
                    </form>
                  </div>
                </div>
              </div>

              <div class="col-xl">
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Crear Productos</h5>
                  </div>
                  <div class="card-body">
                    <form id="registrar_producto">
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">NOMBRE PRODUCTO</label>
                        <input type="text" class="form-control" id="basic-default-fullname" name="product_name"
                          placeholder="Cafe" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-company">REFERENCIA</label>
                        <input type="text" class="form-control" id="basic-default-company" name="product_reference"
                          placeholder="v21zap0123M" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-company">PRECIO</label>
                        <input type="number" class="form-control" id="basic-default-company" name="product_price"
                          placeholder="1200" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-company">PESO</label>
                        <input type="number" class="form-control" id="basic-default-company" name="product_weight"
                          placeholder="5" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-company">CATEGORIAS</label>
                        <select name="categories_fk_id" class="form-control ">
                          <option hidden>Seleccionar</option>
                          <?php foreach ($categorias as $categoria) {?>
                          <option value="<?php echo $categoria['category_id'] ?>">
                            <?php echo $categoria['name_category'] ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-phone">STOCK</label>
                        <input type="number" id="basic-default-phone" name="product_stock"
                          class="form-control phone-mask" />
                      </div>

                      <button type="submit" class="btn btn-primary">REGISTRAR</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

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

    <script src="../../../src/scripts/jquery.validate.js"></script>


    <script src="../../controllers/categorysController.js"></script>

    <script src="../../controllers/productsController.js"></script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>






</body>

</html>