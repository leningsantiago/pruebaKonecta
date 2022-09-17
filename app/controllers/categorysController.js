 //metodo para registrar categorias
 $("body").on('submit', '#registrar_categorias', function (event) {
     event.preventDefault();
     if ($("#registrar_categorias").valid()) {
         $.ajax({
             type: "POST",
             url: "../../model/Category.php",
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
                     Swal.fire({
                         icon: 'success',
                         title: 'Perfecto.',
                         text: 'Categoria Registrada Correctamente',
                     })
                     setTimeout(function () {
                         location.reload();
                     }, 1500);
                 }
             },
         });
     }
 })