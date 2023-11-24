<?php
const CANT_REG_PAG = 5; 

try {
    // Consulta para Habitaciones
    $consultaHabitaciones = $conn->prepare("SELECT * FROM dbo.Habitaciones");
    $consultaHabitaciones->execute();
    $habitaciones = $consultaHabitaciones->fetchAll(PDO::FETCH_ASSOC);

    $pagHabitaciones = isset($_GET['pagHabitaciones']) ? (int)$_GET['pagHabitaciones'] : 1;
    $cantPagHabitaciones = ceil(count($habitaciones) / CANT_REG_PAG);
    $inicioHabitaciones = ($pagHabitaciones - 1) * CANT_REG_PAG;
    $habitacionesPaginadas = array_slice($habitaciones, $inicioHabitaciones, CANT_REG_PAG);

    echo "<div class='tabla-container'>
        <h3>Habitaciones</h3>
        <table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Numero</th>
                    <th>Capacidad</th>
                    <th>Piso</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>";

    foreach ($habitacionesPaginadas as $habitacion) {
        echo "<tr>
            <td>{$habitacion['ID']}</td>
            <td>{$habitacion['Numero']}</td>
            <td>{$habitacion['Capacidad']}</td>
            <td>{$habitacion['Piso']}</td>
            <td>{$habitacion['Precio']}</td>
        </tr>";
    }

    echo "</tbody>
        </table>
        <nav aria-label='Page navigation example'>
            <ul class='pagination'>";

    for ($i = 1; $i <= $cantPagHabitaciones; $i++) {
        echo "<li class='page-item " . ($i == $pagHabitaciones ? 'active' : '') . "'>
                <a class='page-link' href='?pagHabitaciones={$i}'>$i</a>
            </li>";
    }

    echo "</ul>
        </nav>
    </div>";

    // Consulta para Salones
    $consultaSalones = $conn->prepare("SELECT * FROM dbo.Salones");
    $consultaSalones->execute();
    $salones = $consultaSalones->fetchAll(PDO::FETCH_ASSOC);

    $pagSalones = isset($_GET['pagSalones']) ? (int)$_GET['pagSalones'] : 1;
    $cantPagSalones = ceil(count($salones) / CANT_REG_PAG);
    $inicioSalones = ($pagSalones - 1) * CANT_REG_PAG;
    $salonesPaginados = array_slice($salones, $inicioSalones, CANT_REG_PAG);

    echo "<div class='tabla-container'>
        <h3>Salones</h3>
        <table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Numero</th>
                    <th>Tamaño</th>
                    <th>Piso</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>";

    foreach ($salonesPaginados as $salon) {
        echo "<tr>
            <td>{$salon['ID']}</td>
            <td>{$salon['Numero']}</td>
            <td>{$salon['Tamanio']}</td>
            <td>{$salon['Piso']}</td>
            <td>{$salon['Precio']}</td>
        </tr>";
    }

    echo "</tbody>
        </table>
        <nav aria-label='Page navigation example'>
            <ul class='pagination'>";

    for ($i = 1; $i <= $cantPagSalones; $i++) {
        echo "<li class='page-item " . ($i == $pagSalones ? 'active' : '') . "'>
                <a class='page-link' href='?pagSalones={$i}'>$i</a>
            </li>";
    }

    echo "</ul>
        </nav>
    </div>";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>