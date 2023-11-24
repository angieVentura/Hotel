<div class="container formGRANDE">
    <form action="register.php" method="POST">
        <div class="formm">
            <h2>Registrate</h2>
            <?php
            if (!empty($mensajeError)) {
                echo '<div class="alert alert-danger" role="alert">' . $mensajeError . '</div>';
            }
            ?>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nombre" name="Nombre" required>
            </div>
            <div class="input-group mb-3">
                <input type="tel" class="form-control" placeholder="Numero Telefonico" name="Numero" pattern=".{10}" title="Debe ser un numero telefonico valido , deben ser 10 digitos" required>
            </div>
            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Correo electronico" name="Correo" required>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Direccion" name="Direccion" required>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Contraseña" name="Pass" id="password" pattern=".{7,}" title="La contraseña debe tener al menos 7 caracteres" required>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Verificar contraseña" name="Pass2" required>
            </div>
            <input class="btn btn-log" type="submit" value="Registrarse">
            <br>
            <a href="login.php">¿Ya tenes una cuenta? ¡Inicia sesión!</a>
        </div>
    </form>
</div>
