<div style="padding: 1rem;" class="container">
    <div class="row">
        <div class="col-4">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action sec-cont-per active" onclick="mostrarSeccion('datosPersonales', this)">
                    <div class="icon-cont-perfil"><i class="fa-solid fa-user"></i></div> Datos personales
                </button>
                <button type="button" class="list-group-item list-group-item-action sec-cont-per" onclick="mostrarSeccion('seguridad', this)">
                    <div class="icon-cont-perfil"><i class="fa-solid fa-lock"></i></div> Seguridad
                </button>

            </div>
        </div>
        <div class="col-8">
            <!--Aca se hace el cambio al presionar los botones-->

            <!--Este es para perfil-->
            <ul id="datosPersonales" class="seccion-perfil" class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row" style="display: flex;justify-content: space-between;">
                        <div class="col-2" style="display: flex; align-self: center">Nombre</div>
                        <div class="change">
                            <!--Que muestro los datos al momento de cargar la pagona, o sea por defecto, pero si presiono editar que carge el div="editar"-->
                            <div class="mostrar" id="m1">
                                <div class="col">col-4</div>
                                <div class="col-2 btn-editar"><button onclick="mostrarEditar('d1', 'm1')" type="button" class="btn btn-primary">Editar</button></div>
                            </div>
                            <!--Cuadno cargue este div, si presiono cancelar que carge el div="mostrar"-->
                            <div class="editar" id="d1" style="display: none;">
                                <form class="form-perfil" method="post" action="perfil.php">
                                    <div class="col">
                                        <input type="text" class="form-control" id="inputNombre" placeholder="Nombre" name="Nombre">
                                    </div>
                                    <div class="col-4 btn-editar">
                                        <button type="submit" class="btn btn-primary" style="margin-right: 0.5rem; margin-right: 0.5rem;">Confirmar</button>
                                        <button onclick="mostrarEditar('m1', 'd1')" style="color: red;" type="button" class="btn btn-light">Cancelar</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row" style="display: flex;">
                        <div class="col-2" style="display: flex; align-self: center">Email</div>
                        <div class="change">
                            <!--Que muestro los datos al momento de cargar la pagona, o sea por defecto, pero si presiono editar que carge el div="editar"-->
                            <div class="mostrar" id="m2">
                                <div class="col">col-4</div>
                                <div class="col-2 btn-editar"><button onclick="mostrarEditar('d2', 'm2')" type="button" class="btn btn-primary">Editar</button></div>
                            </div>
                            <!--Cuadno cargue este div, si presiono cancelar que carge el div="mostrar"-->
                            <div class="editar" id="d2" style="display: none;">
                                <form class="form-perfil" method="post" action="perfil.php">
                                    <div class="col">
                                        <input type="text" class="form-control" id="inputNombre" placeholder="Email" name="Email">
                                    </div>
                                    <div class="col-4 btn-editar">
                                        <button type="submit" class="btn btn-primary" style=" margin-right: 0.5rem; margin-right: 0.5rem;">Confirmar</button>

                                        <button onclick="mostrarEditar('m2', 'd2')" style="color: red;" type="button" class="btn btn-light">Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row" style="display: flex;">
                        <div class="col-2" style="display: flex; align-self: center">Teléfono</div>
                        <div class="change">
                            <!--Que muestro los datos al momento de cargar la pagona, o sea por defecto, pero si presiono editar que carge el div="editar"-->
                            <div class="mostrar" id="m3">
                                <div class="col">col-4</div>
                                <div class="col-2 btn-editar"><button onclick="mostrarEditar('d3', 'm3')" type="button" class="btn btn-primary">Editar</button></div>
                            </div>
                            <!--Cuadno cargue este div, si presiono cancelar que carge el div="mostrar"-->
                            <div class="editar" id="d3" style="display: none;">
                                <form class="form-perfil" method="post" action="perfil.php">
                                    <div class="col">
                                        <input type="text" class="form-control" id="inputNombre" placeholder="Teléfono" name="Telefono">
                                    </div>
                                    <div class="col-4 btn-editar">
                                        <button type="submit" class="btn btn-primary" style="margin-right: 0.5rem; margin-right: 0.5rem;">Confirmar</button>
                                        <button onclick="mostrarEditar('m3', 'd3')" style="color: red;" type="button" class="btn btn-light">Cancelar</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row" style="display: flex;">
                        <div class="col-2" style="display: flex; align-self: center">Dirección</div>
                        <div class="change">
                            <!--Que muestro los datos al momento de cargar la pagona, o sea por defecto, pero si presiono editar que carge el div="editar"-->
                            <div class="mostrar" id="m4">
                                <div class="col">col-4</div>
                                <div class="col-2 btn-editar"><button onclick="mostrarEditar('d4', 'm4')" type="button" class="btn btn-primary">Editar</button></div>
                            </div>
                            <!--Cuadno cargue este div, si presiono cancelar que carge el div="mostrar"-->
                            <div class="editar" id="d4" style="display: none;">
                                <form class="form-perfil" method="post" action="perfil.php">
                                    <div class="col">
                                        <input type="text" class="form-control" id="inputNombre" placeholder="Dirección" name="Direccion">
                                    </div>
                                    <div class="col-4 btn-editar">
                                        <button type="submit" class="btn btn-primary" style="margin-right: 0.5rem; margin-right: 0.5rem;"> Confirmar</button>
                                        <button onclick="mostrarEditar('m4', 'd4')" style="color: red;" type="button" class="btn btn-light">Cancelar</button>



                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <!--Este es para Contraseña-->
            <ul id="seguridad" class="seccion-perfil" class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row" style="display: flex;">
                        <div class="col-2" style="display: flex; align-self: center">Contraseña</div>
                        <div class="change">
                            <!--Que muestro los datos al momento de cargar la pagona, o sea por defecto, pero si presiono editar que carge el div="editar"-->
                            <div class="mostrar" id="m5">
                                <div class="col">col-4</div>
                                <div class="col-2 btn-editar"><button onclick="mostrarEditar('d5', 'm5')" type="button" class="btn btn-primary">Editar</button></div>
                            </div>
                            <!--Cuadno cargue este div, si presiono cancelar que carge el div="mostrar"-->
                            <div class="editar" id="d5" style="display: none;">
                                <form class="form-perfil" method="post" action="perfil.php">
                                    <div class="col d-flex">
                                        <input type="text" class="form-control" id="inputNombre" placeholder="Nueva contraseña">
                                        <input type="text" class="form-control" id="inputNombre" placeholder="Repetir contraseña">
                                    </div>
                                    <div class="col-4 btn-editar">
                                        <button type="submit" class="btn btn-primary" style=" margin-right: 0.5rem; margin-right: 0.5rem;">Confirmar</button>
                                        <button onclick="mostrarEditar('m5', 'd5')" style="color: red;" type="button" class="btn btn-light">Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    // Mostrar la sección 'datosPersonales' por defecto al cargar la página
    mostrarSeccion('datosPersonales', document.querySelector('.list-group-item.active'));

    function mostrarSeccion(seccion, boton) {
        // Ocultar todas las secciones
        document.querySelectorAll('.seccion-perfil').forEach(function(seccion) {
            seccion.style.display = 'none';
        });

        // Mostrar la sección correspondiente
        document.getElementById(seccion).style.display = 'block';

        // Quitar la clase 'active' de todos los botones
        document.querySelectorAll('.list-group-item').forEach(function(item) {
            item.classList.remove('active');
        });

        // Agregar la clase 'active' al botón clicado
        boton.classList.add('active');
    }

    function mostrarEditar(seccionMostrar, seccionOcultar) {
        document.getElementById(seccionMostrar).style.display = 'contents';
        document.getElementById(seccionOcultar).style.display = 'none';
    }
</script>