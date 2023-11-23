<nav class="navbar navbar-expand-lg navbar-dark " aria-label="Fifth navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Hotel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample05">

            <a href="register.php">
                <button class="btn-header">
                    Registrarse
                </button>
            </a>
            <a href="login.php">
                <button class="btn-header">
                    Inicio Sesión
                </button>
            </a>

            <div class="btn-group ">
                <button type="button"  class="btn btn-secondary icon-user" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="img-user"  src="images/user/usuario.jpg" alt="">
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><button onclick="location.href='perfil.php'" class="dropdown-item" type="button">Perfil</button></li>
                    <li><button class="dropdown-item" type="button">Cerrar Sesión</button></li>
                </ul>
            </div>
        </div>
    </div>
</nav>