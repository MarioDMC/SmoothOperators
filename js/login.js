$(document).ready(function() {
  $("#btn-login").click(function() {
      let obj = {
        "accion": "login"
      };
    $("form").find("input").map(function(i, e){
        obj[$(this).prop("name")] = $(this).val();
        if($(this).prop("type") == "checkbox"){
            obj[$(this).prop("name")] = $(this).prop("checked");
        }
    });
    $.post("includes/funciones.php", obj, function(respuesta){

        if(respuesta.status == 0){
          alert("Usuario incorrecto");
        }
        else if(respuesta.status == 2){
          alert("Contraseña incorrecta");
        }
        else {
          window.location.replace("index.php");
        }

    }, "JSON");
  });
});
