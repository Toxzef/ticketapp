<?php

include_once 'servicio/TicketService.php';

if (isset($_POST["idSucursal"])){
  $sucursal = $_POST["idSucursal"];
  $area = $_POST["idAreaAtencion"];

  $ts = new TicketService();

    $ts->eliminarAtendido($sucursal,$area);
    $ts->modificarEspera($sucursal,$area);
    header ("location: index.php");
  }
