<?php
include_once 'servicio/TicketService.php';
$ts = new TicketService();
session_start();
$tickets = $ts->listar($_SESSION["idSucursal"], $_SESSION["idAreaAtencion"]);

$idSucursal = $_SESSION["idSucursal"];
$idAreaAtencion = $_SESSION["idAreaAtencion"];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"  crossorigin="anonymous">
    </head>

    <body>
        <table border='1' class="pure-table">
          <thead>
            <tr>
                <td>Numero</td>
                <td>Hora de atención</td>
                <td>Estado</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($tickets as $t) { ?>
              <tr>
                <td><?=$t->getNumeroAtencion() ?></td>
                <td><?=$t->getHoraAtencion() ?></td>
                <td><?=$t->getEstado() ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <button class="pure-button" onclick="location.reload(true)">Actualizar</button>
        <form action="modificarnumero.php" method="post">
          <input type="text" name="idSucursal" value="<?=$idSucursal ?>">
          <input type="text" name="idAreaAtencion" value="<?=$idAreaAtencion ?>">
          <button class="pure-button">Llamar siguente numero</button>
        </form>
    </body>
</html>
