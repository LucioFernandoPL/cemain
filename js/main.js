$(document).ready(function () {
  $(function () {
    $(".bxslider").bxSlider({
      mode: "fade",
      captions: true,
      slideWidth: 1200,
    });
  });

  $(".subir").click(function (e) {
    e.preventDefault();
    $("html,body").animate(
      {
        scrollTop: 0,
      },
      500
    );

    return false;
  });

  var theme = $("#theme");

  $("#to-green").click(function () {
    theme.attr("href", "css/green.css");
  });

  $("#to-red").click(function () {
    theme.attr("href", "css/red.css");
  });

  $("#to-blue").click(function () {
    theme.attr("href", "css/blue.css");
  });
});

function pideDatos(evento) {
  evento.preventDefault();
  var nombre = document.querySelector("#name").value;
  var email = document.querySelector("#email").value;
  var password = document.querySelector("#password").value;
  var dom = "";

  console.log(nombre + " - " + email + " - " + password);
  if (nombre == "" || email == "" || password == "") {
    dom = "Debe introducir sus datos completos.";
  } else {
    dom = "Por el momento no funciona, espéralo próximamente.";
  }

  var login = document.querySelector("#login");
  login.textContent = dom;
}

document.querySelector("#formulario").addEventListener("submit", pideDatos);
