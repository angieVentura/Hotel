<div class="encabezado">
    <div class="encabezado-cont contenedor">
        <div class="menu">
            <nav class="nav menu-layout">
                <?php if (isset($_SESSION['Email'])) { ?>
                    <button class="nav-home-btn" href="formulario_reserva.php">
                        <a href="formulario_reserva.php" class="fa-solid fa-party-horn">Reservar Habitacion</a>
                    </button>
                <?php } ?>
                <button class="nav-home-btn">
                <a href="formulario_reserva.php" >Alquiler de salones</a>
                </button>
                <button class="nav-home-btn">
                <a href="Ver_eventos.php" >Eventos</a>
                </button>
            </nav>
        </div>
    </div>
</div>
<div class="encabezado-home">
    <div class="encabezado-cont contenedor">
        <div class="cont-title">
            <h1 class="title">Encontrá tu próximo alojamiento</h1>
            <h3 class="sub title">Buscá tu habitación ideal y mucho más</h3>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" aria-label="Text input with dropdown button">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
            <section class="ftco-section dropdown-menu dropdown-menu-end">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center mb-5">
                            <h2 class="heading-section">Calendar #03</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="calendar-section">
                                <div class="row no-gutters">
                                    <div class="col-md-6">

                                        <div class="calendar calendar-first" id="calendar_first">
                                            <div class="calendar_header">
                                                <button class="switch-month switch-left">
                                                    <i class="fa fa-chevron-left"></i>
                                                </button>
                                                <h2></h2>
                                                <button class="switch-month switch-right">
                                                    <i class="fa fa-chevron-right"></i>
                                                </button>
                                            </div>
                                            <div class="calendar_weekdays"></div>
                                            <div class="calendar_content"></div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">

                                        <div class="calendar calendar-second" id="calendar_second">
                                            <div class="calendar_header">
                                                <button class="switch-month switch-left">
                                                    <i class="fa fa-chevron-left"></i>
                                                </button>
                                                <h2></h2>
                                                <button class="switch-month switch-right">
                                                    <i class="fa fa-chevron-right"></i>
                                                </button>
                                            </div>
                                            <div class="calendar_weekdays"></div>
                                            <div class="calendar_content"></div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<div class="contenedor">

    <h3 class="titulo-eventos">Eventos</h3>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/evento (1).jpg" class="d-block w-100 evento-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/evento (2).jpg" class="d-block w-100 evento-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/evento (3).jpg" class="d-block w-100 evento-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <h3 class="titulo-car">Habitaciones</h3>
</div>
<div class="contenedor-car">
    <div class="swiper mySwiper">

        <div class="swiper-wrapper">

            <?php foreach ($habitaciones as $habitacion) { ?>
                <div class="swiper-slide car">
                    <div class="card card-rec" style="width: 16rem;">
                        <a href='ver_mas_publi.php?ID=<?php echo $habitacion['ID']; ?>&location=home.php'>
                        <?php if (file_exists('images/habitaciones/' . $habitacion['ID'] . '/habitacion.jpg')) { ?>
                                <img  class="card-img-top" src="images/habitaciones/<?php echo $habitacion['ID'] ?>/habitacion.jpg" alt="">
                            <?php  } else { ?>
                                <img  class="card-img-top" src="images/habitaciones/1/habitacion.jpg" alt="">
                            <?php } ?>

                            <div class="card-body">

                                <h5 class="card-title">
                                    <div class="cont-res"> <?php echo $habitacion['Numero']; ?></div>
                                </h5>
                                <p class="card-text card-pais">
                                    <em><?php echo $habitacion['Nombre']; ?></em>
                                </p>
                                <p class="card-text descripcion-carrusel">
                                    Desde: <b>$<?php echo $habitacion['Precio']; ?></b>
                                </p>

                                <div class="btncard">

                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>

        </div>
        <div id="der1" class="swiper-button-next-h"><i class="fa-solid fa-chevron-left"></i></div>
        <div id="izq1" class="swiper-button-prev-h"><i class="fa-solid fa-chevron-right"></i></div>
    </div>

</div>

<div class="contenedor">
    <h3 class="titulo-eventos">Salones</h3>
</div>
<div class="contenedor-car">
    <div id="car" class="swiper mySwiper">

        <div class="swiper-wrapper">

            <?php foreach ($salones as $salon) { ?>
                <div class="swiper-slide car">
                    <div class="card card-rec" style="width: 16rem;">
                        <a href=''>
                           
                            <?php if (file_exists('images/salones/' . $salon['ID'] . '/salon.jpg')) { ?>
                                <img  class="card-img-top" src="images/salones/<?php echo $salon['ID'] ?>/salon.jpg" alt="">
                            <?php  } else { ?>
                                <img  class="card-img-top" src="images/salones/1/salon.jpg" alt="">
                            <?php } ?>
                            <div class="card-body">

                                <h5 class="card-title">
                                    <div class="cont-res"> <?php echo $salon['Numero']; ?></div>
                                </h5>
                                <p class="card-text card-pais">
                                    <em><?php echo $salon['Tamanio']; ?>m²</em>
                                </p>
                                <p class="card-text descripcion-carrusel">
                                    Desde: <b>$<?php echo $salon['Precio']; ?></b>
                                </p>
                                <div class="btncard">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>

        </div>
        <div id="der1" class="swiper-button-next-h"><i class="fa-solid fa-chevron-left"></i></div>
        <div id="izq1" class="swiper-button-prev-h"><i class="fa-solid fa-chevron-right"></i></div>
    </div>

</div>

<script>
    var elementos = document.querySelectorAll('.swiper-button-prev-h');

    elementos.forEach(function(elemento) {
        var anchoDiv1 = document.getElementById('car').offsetWidth;
        console.log(anchoDiv1);
        elemento.style.marginLeft = anchoDiv1 - 43 + 'px';
    });
</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="js/crs.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>