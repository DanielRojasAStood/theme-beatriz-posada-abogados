import $ from "jquery";

$("#numero-telefono").on("input", function () {
  var $input = $(this);
  var value = $input.val();

  // Eliminar todos los caracteres no numéricos
  var cleaned = value.replace(/\D/g, "");

  // Actualizar el valor del campo
  $input.val(cleaned);

  // Mostrar alerta si el valor contiene caracteres no numéricos
  if (value !== cleaned) {
    $input.next(".wpcf7-not-valid-tip").remove(); // Eliminar cualquier mensaje de error existente
    $input.after(
      '<span class="wpcf7-not-valid-tip">Solo se permiten números</span>'
    );
  } else {
    $input.next(".error-message").remove(); // Eliminar el mensaje de error si el valor es correcto
  }
});
