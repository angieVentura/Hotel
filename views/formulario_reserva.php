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
<div class="container form">
    <form action="reservar.php" method="POST">
        <div>
            <label for="numero">Numero de habitacion:</label>
            <select name="numero">
                <?php foreach ($habitaciones as $habitacion) { ?>
                    <option value="<?php echo $habitacion['Numero'] ?>"><?php echo $habitacion['Numero'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="comienzo">Comienzo:</label>
            <input type="date" id="comienzo" name="comienzo" min="<?php echo date("Y-m-d") ?>" max="<?php echo $sig_anio ?>" />
        </div>
        <div>
            <label for="final">Final:</label>
            <input type="date" id="final" name="final" min="<?php echo date("Y-m-d") ?>" max="<?php echo $sig_anio ?>" />
        </div>
        <input type="submit" class="btn btn-log" id="boton" value="Reservar"></button>
    </form>
</div>