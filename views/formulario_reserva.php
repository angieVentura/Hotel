<?php
try {
    $consulta = $conn->prepare("SELECT h.Numero, h.Precio FROM Habitaciones h LEFT JOIN Reservaciones r ON h.ID = r.HabitacionID");
    $consulta->execute();

    // Obtener el resultado como un array asociativo
    $habitaciones = $consulta->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$sig_anio = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("Y") + 1));
?>

<div class="container formGRANDE">
    <form action="reservar.php" method="POST">
        <div class="formm">
            <h2>Reservar Habitación</h2>
            <div class="input-group mb-3">
                <label for="numero" class="input-label">Número de habitación:</label>
                <select class="form-control" name="numero">
                    <?php foreach ($habitaciones as $habitacion) { ?>
                        <option value="<?php echo $habitacion['Numero'] ?>"><?php echo $habitacion['Numero'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="input-group mb-3">
                <label for="comienzo" class="input-label">Fecha de Comienzo:</label>
                <input type="date" id="comienzo" name="comienzo" class="form-control" min="<?php echo date("Y-m-d") ?>" max="<?php echo $sig_anio ?>" />
            </div>
            <div class="input-group mb-3">
                <label for="final" class="input-label">Fecha Final:</label>
                <input type="date" id="final" name="final" class="form-control" min="<?php echo date("Y-m-d") ?>" max="<?php echo $sig_anio ?>" />
            </div>
            <input type="submit" class="btn btn-log" id="boton" value="Reservar">
        </div>
    </form>
</div>
