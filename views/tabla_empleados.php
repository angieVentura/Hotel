<?php 
try {
    $consulta = $conn->prepare("SELECT * FROM Empleados");
    $consulta->execute();

    // Obtener el resultado como un array asociativo
    $empleados = $consulta->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$numRows = count($empleados);

const CANT_REG_PAG = 15;

$pag = (isset($_GET['pag']) ? $_GET['pag'] : 1);

$desde = CANT_REG_PAG * ($pag - 1);

$por_pag = CANT_REG_PAG;

$query2 = "SELECT * FROM (SELECT *, ROW_NUMBER() OVER (ORDER BY Nombre) AS RowNum FROM Empleados) AS SubQuery WHERE RowNum BETWEEN $desde + 1 AND $desde + $por_pag";
$result2 = $conn->query($query2);
if(!$result2){
    throw new Exception("Error en la consulta: " . implode(", ", $conn->errorInfo()));
}

$empleados2 = $result2->fetchAll(PDO::FETCH_ASSOC);
$cant_pag = ceil($numRows/CANT_REG_PAG);


?>
<div class="contenedor">
<table class="table">
    <thead>
        <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Puesto</th>
        <th>Salario</th>
        <th>Fecha de comienzo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($empleados2 as $empleado){
            echo "<tr>
            <td>" . $empleado['EmpleadoID'] . "</td>
            <td>" . $empleado['Nombre'] . "</td>
            <td>" . $empleado['Puesto'] . "</td>
            <td>" . $empleado['Salario'] . "</td>
            <td>" . $empleado['FechaContratacion'] . "</td>
        </tr>";
        }?>
    </tbody>
</table>
<nav aria-label="Page navigation example">
    <ul class="pagination">
      <?php
      for ($i = 1; $i <= $cant_pag; $i++) {
        if ($i == $pag) {
          echo "<li class='page-item active' aria-current='page'>
                   <span class='page-link'>" . $i . "</span>
               </li>";
        } else {
          echo "  <li class='page-item'><a class='page-link' href='tabla_empleados.php?pag=" . $i . "'>" . $i . "</a></li>";
        }
      }
      ?>
      </li>
    </ul>
  </nav>
</div>