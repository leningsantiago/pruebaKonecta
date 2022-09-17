//metodo para registrar categorias
$("body").on("submit", "#registrar_producto", function (event) {
  event.preventDefault();
  if ($("#registrar_producto").valid()) {
    $.ajax({
      type: "POST",
      url: "../../model/Product.php",
      dataType: "json",
      data: $(this).serialize(),
      success: function (respuesta) {
        if (respuesta.error == 1) {
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Campo vacios.",
          });
        }
        if (respuesta.exito == 1) {
          Swal.fire({
            icon: "success",
            title: "Perfecto.",
            text: "Producto Registrado Correctamente",
          });
          setTimeout(function () {
            location.reload();
          }, 1500);
        }
      },
    });
  }
});

//metodo para editar categorias
$("body").on("submit", "#edit_producto", function (event) {
  event.preventDefault();
  if ($("#edit_producto").valid()) {
    $("#editModalProduct").hide();
    $(".modal-backdrop").hide();
    $.ajax({
      type: "POST",
      url: "../../model/editProduct.php",
      dataType: "json",
      data: $(this).serialize(),
      success: function (respuesta) {
        if (respuesta.error == 1) {
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Error No Se Puede Actualizar.",
          });
        }
        if (respuesta.exito == 1) {
          Swal.fire({
            icon: "success",
            title: "Perfecto.",
            text: "Producto Editado Correctamente",
          });
          setTimeout(function () {
            location.reload();
          }, 1700);
        }
      },
    });
  }
});

//metodo para venta de productos
$("body").on("submit", "#ventasProducts", function (event) {
  event.preventDefault();
  if ($("#ventasProducts").valid()) {
    $.ajax({
      type: "POST",
      url: "../../model/VentaProduct.php",
      dataType: "json",
      data: $(this).serialize(),
      success: function (respuesta) {
        if (respuesta.error == 1) {
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Error No Se Puede Vender.",
          });
        }
        if (respuesta.error == 4) {
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Productos Agotados.",
          });
        }
        if (respuesta.exito == 1) {
          Swal.fire({
            icon: "success",
            title: "Perfecto.",
            text: "Producto Vendido Correctamente",
          });
          setTimeout(function () {
            location.reload();
          }, 1700);
        }
      },
    });
  }
});
