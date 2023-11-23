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
                <?php if(!isset($_SESSION['Email'])){ ?>
                <a href="login.php">
                    <button class="btn-header">
                        Iniciar sesion
                    </button>
                </a>
                <?php } else {?>
                <a href="logout.php">
                    <button class="btn-header">
                        Cerrar sesion
                    </button>
                </a>
                <?php }?>
            </div>
        </div>
    </nav>