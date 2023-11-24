<?php
require_once("tablaAlComida.php");
?>
<div class="contenedor">
    <table class="table">
        <thead>
            <tr>
                <th>Cantidad</th>
                <th>Comida</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($comidas); $i++) {   ?>
                <tr>
                <?php
                    $cantidadEncontrada = 0;
                    foreach ($comida as $niam) {
                        if ($niam['Nombre'] == $comidas[$i]) {
                            $cantidadEncontrada = $niam['cant'];
                        }
                    }
                    ?>
                    <td <?php if ($cantidadEncontrada == 0) echo 'class="cero"'; ?>>
                        <?php echo $cantidadEncontrada; ?>
                    </td>
                    <td <?php if ($cantidadEncontrada == 0) echo 'class="cero"'; ?>><?php echo $comidas[$i] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>