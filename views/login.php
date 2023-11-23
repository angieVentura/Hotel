<div class="container form">
    <form action="login_enviar.php" method="POST">
        <h2>Inicia sesión</h2>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Correo electronico" id="correo" name="correo" onchange="validarCorreo()">
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password" onchange="contarCaracteres()">
        </div>
        <input type="submit" class="btn btn-log" id="boton" value="Iniciar Sesion"></button>
        <br>
        <a href=" #">¿Olvidaste tu contraseña?</a> o <a href="register.php">¿No tenes una cuenta?</a>
    </form>
    <div id="aviso" style="Color: RED"></div>
</div>

<script>
    var correoEstado = false;
    var contrasenaEstado = false;
    
    function validarCorreo() {
        var correo = document.getElementById('correo');
        var correoValido = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
        var aviso = document.getElementById('aviso');
        
        correoEstado = true;
        aviso.textContent = "";
        if (!correoValido.test(correo.value)) {
            correoEstado = false;
            aviso.textContent = "Correo no valido";
        }
    }

    function contarCaracteres() {
        // Obtener el valor del input
        var texto = document.getElementById('password').value;
        // Obtener la longitud del texto
        var longitud = texto.length;
        // Obtener el elemento span donde se mostrará el contador
        var aviso = document.getElementById('aviso');
        
        correoEstado = true;
        aviso.textContent = "";
        if (longitud > 0 && longitud < 8) {
            correoEstado = false;
            aviso.textContent = "La contraseña debe ser mayor a 8 caracteres.";
        }
    }
</script>