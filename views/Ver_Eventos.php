<div class="container">
    <div class="row">
        <?php foreach ($eventos as $evento): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100" style="width: 400px;">
                    <img src="<?php echo $evento['Imagen']; ?>" class="card-img-top" alt="Imagen del evento" style="object-fit: cover; height: 450px; width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $evento['Nombre']; ?></h5>
                        <p class="card-text"><?php echo $evento['Descripcion']; ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Fecha de Inicio: <?php echo $evento['FechaInicio']; ?></li>
                        <li class="list-group-item">Fecha de Fin: <?php echo $evento['FechaFin']; ?></li>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

