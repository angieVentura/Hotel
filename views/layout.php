<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hotel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="scss/style.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">
    <script src="https://kit.fontawesome.com/549206ac20.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
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
    <?php
    require_once "menu.php";

    $view = (isset($view)) ? $view : 'home';
    require_once $view . ".php";
    ?>

    <footer class="text-center text-lg-start text-muted sticky-bottom">
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <div class="me-5 d-none d-lg-block">

            </div>
            <div id="redesS">
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                <i class="fas fa-envelope me-3"></i>
                </a>
            </div>
        </section>
        <section>
            <div id="redesS" class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div id="redesS" class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h3 class="text-uppercase fw-bold mb-4">
                            HOTEL
                        </h3>
                    </div>
                    <div id="redesS" class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <p><a href="" class="text-reset footer-a">Estadías</a></p>
                        <p><a href="" class="text-reset footer-a">Alquiler de salones</a></p>
                        <p><a href="" class="text-reset footer-a">Eventos</a></p>
                    </div>
                    <div id="redesS" class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
                        <p><i class="fas fa-envelope me-3"></i>Hotel@gmail.com </p>
                        <p><i class="fas fa-phone me-3"></i> +54 9 11 XXXX-XXXX</p>
                        <p><i class="fas fa-phone me-3"></i><a href="Politica.php">Politica y privacidad</a></p>
                    </div>
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Copyright -->
        <div id="redesS barra" class="text-center p-4">
            © 2023 Todos los derechos reservaods.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>