<div class="container formGRANDE">
    <form action="Admin_eventos.php" method="POST" enctype="multipart/form-data">
        <div class="formm">
            <h2>Subir Evento</h2>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Título del Evento" name="titulo" required title="Ingresa el título del evento">
            </div>
            <div class="input-group mb-3">
                <textarea class="form-control" placeholder="Descripción del Evento" name="descripcion" rows="4" required title="Ingresa una descripción del evento"></textarea>
            </div>
            <div class="input-group mb-3">
                <input type="date" class="form-control" name="fecha_inicio" required title="Selecciona la fecha de inicio del evento">
            </div>
            <div class="input-group mb-3">
                <input type="date" class="form-control" name="fecha_fin" required title="Selecciona la fecha de fin del evento">
            </div>
            <div class="input-group mb-3">
                <input type="int" class="form-control" name="precio" required title="Ingrese el valor del costo de la reservacion">
            </div>
            <div class="mb-3">
                <input class="form-control form-control-sm" id="formFileSm" type="file" name="imagen" title="Selecciona una imagen para el evento">
            </div>
            <input class="btn btn-log" type="submit" value="Subir Evento">
        </div>
    </form>
</div>
