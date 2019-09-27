$(document).ready(function() {
  $("#btn-login").click(function(iii) {
    iii.preventDefault();
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
      if(respuesta){
      switch(respuesta.status){
        case 0: alert("Usuario incorrecto");
        break;
        case 1:
          window.location.replace("index.php");
          // console.log("me lleva la verga");
        break;
        case 2: alert("Contraseña incorrecta");
        break;
        case 3: alert("Campos vacios");
        break;
      }
    }
    else
    {
      console.log("error");
    }

    }, "JSON");
  });
});
