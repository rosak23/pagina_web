<!-- ========== CONFIGURACIONES DE ESTILOS Y AJAX ========== -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>System Soluciones Informáticas</title>

  <!--Links-->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="views/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/assets/dist/css/adminlte.min.css">

</head>

<body>
  <div class="col-md-6">
    <form class="needs-validation" novalidate>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Nombre</label>
          <input type="text" class="form-control" id="inputnombre">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Empresa</label>
          <input type="text" class="form-control" id="inputempresa">
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control" id="inputEmail">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Telefono</label>
          <input type="number" class="form-control" id="inputTelefono">
        </div>
        <div class="form-group col-md-6">
          <label for="inputCiudad">Ciudad</label>
          <input type="text" class="form-control" id="inputCiudad">
        </div>
        <div class="form-group col-md-6">
          <label for="inputSoporte">Soporte Actual</label>
          <input type="text" class="form-control" id="inputSoporte">
        </div>
        <div class="form-group col-md-6">
          <h5><span>Describenos un poco más de las necesidades de tu Empresa</span></h5>
          <textarea name="" id="texDescripcion" cols="110" rows="7"></textarea>
        </div>
        <div class="form-group col-md-12">
          <button type="button" class="btn btn-primary" id="btnGuardarFormulario">Enviar Formulario</button>
        </div>
    </form>
  </div>


  <!-- ========== Start EVENTO DE GUARDAR DATOS DEL FORMULARIO EN LA BD ========== -->
  <script>
    document.getElementById("btnGuardarFormulario").addEventListener("click", function() {


      console.log("Listo para registrar el formulario");


      var datos = new FormData();

      datos.append("nombre", $("#inputnombre").val());
      datos.append("empresa", $("#inputempresa").val());
      datos.append("email", $("#inputEmail").val());
      datos.append("telefono", $("#inputTelefono").val());
      datos.append("ciudad", $("#inputCiudad").val());
      datos.append("soporte_actual", $("#inputSoporte").val());
      datos.append("descripcion", $("#texDescripcion").val());

      var titulo_msj = "El formulario se envio con exito"

      $.ajax({
        url: "ajax/formulario.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(respuesta) {

          if (respuesta == "ok") {
            Toast.fire({
              icon: 'success',
              title: titulo_msj
            });
          }
        }

      });


    });
  </script>
  <!-- ========== End EVENTO DE GUARDAR DATOS DEL FORMULARIO EN LA BD ========== -->

  <!-- jQuery -->
  <script src="views/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!-- =========CONFIGURACIONES DE ESTILOS Y AJAX ========== -->