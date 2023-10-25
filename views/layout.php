<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hotel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark " aria-label="Fifth navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hotel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample05">
                <button class="btn-header">
                    Registrarse
                </button>
                <button class="btn-header">
                    Inicio Sesión
                </button>
            </div>
        </div>
    </nav>

    <div class="encabezado">
        <div class="encabezado-cont contenedor">
            <div class="menu">
                <nav class="nav menu-layout">
                    <button class="nav-home-btn active">
                        <i class="ri-hotel-bed-line nav-layout"></i> Estadías
                    </button>
                    <button class="nav-home-btn">
                        <i class="fa-solid fa-party-horn"></i> Alquiler de salones
                    </button>
                    <button class="nav-home-btn">
                        Eventos
                    </button>
                </nav>
            </div>
            <div class="cont-title">
                <h1 class="title">Encontrá tu próximo alojamiento</h1>
                <h3 class="sub title">Buscá tu habitación ideal y mucho más</h3>
            </div>
        </div>
    </div>
    <div class="contenedor">
        <?php
        $view = (isset($view)) ? $view : 'home';
        require_once $view . ".php";
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>