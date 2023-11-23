$("#password").keyup(function(e) {
    var password = document.getElementById("password").value;

    if (password.length < 8) {
        mostrarMensaje("La contraseña debe tener al menos 8 caracteres.");
    } else {
        $.ajax({
            type: "POST",
            url: "login.php",
            data: $("#login").serialize(),
            success: function(response) {
                mostrarMensaje(response);
            }
        });
    }
});

function mostrarMensaje(mensaje) {
    $("#mensaje").html(mensaje);
}
