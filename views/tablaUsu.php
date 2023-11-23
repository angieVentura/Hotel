<?php
require_once("tablaUsu.php");
?>
<div class="contenedor">
<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios2 as $usu) { ?>
            <tr>
                <td class="inf"><?php echo $usu['Nombre'] ?></td>
                <td class="inf"><?php echo $usu['Email'] ?></td>
            </tr>
        <?php } ?>
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
          echo "  <li class='page-item'><a class='page-link' href='tablaUsu.php?pag=" . $i . "'>" . $i . "</a></li>";
        }
      }
      ?>
      </li>
    </ul>
  </nav>
</div>
