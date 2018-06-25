<?php

include_once 'datos/Conexion.php';
include_once 'entidad/Ticket.php';

class TicketService{

  private $conexion;

  function __construct(){
    $this->conexion = new Conexion();
  }

  function listar($idSucursal,$idArea){
    $sql = "SELECT * FROM ticketapp.ticket WHERE idAreaAtencion = '$idArea' AND idSucursal = '$idSucursal' AND (Estado = 'En Espera' OR Estado = 'Atendiendo') ORDER BY numeroAtencion asc";
    $result = $this->conexion->query($sql);

    $tickets = array();

    while($fila = mysqli_fetch_assoc($result)) {
      $ticket = new Ticket();
      $ticket->setIdTicket($fila["idTicket"]);
      $ticket->setNumeroAtencion($fila["numeroAtencion"]);
      $ticket->setEstado($fila["Estado"]);
      $ticket->setHoraAtencion($fila["horaAtencion"]);
      $ticket->setIdCliente($fila["idCliente"]);
      $ticket->setIdAreaAtencion($fila["idAreaAtencion"]);
      $ticket->setIdSucursal($fila["idSucursal"]);
      array_push($tickets, $ticket);
    }

    return $tickets;
  }

  function modificarEspera($idSucursal,$idAreaAtencion){
    $sql = "UPDATE ticketapp.ticket SET Estado='Atendiendo' WHERE idAreaAtencion='$idAreaAtencion' AND idSucursal='$idSucursal' AND Estado='En Espera' order by numeroAtencion asc limit 1";
    $this->conexion->query($sql);
  }

  function eliminarAtendido($idSucursal,$idAreaAtencion){
    $sql = "DELETE FROM ticketapp.ticket WHERE idAreaAtencion='$idAreaAtencion' AND idSucursal='$idSucursal' AND Estado='Atendiendo' order by numeroAtencion asc limit 1";
    $this->conexion->query($sql);
  }

}
