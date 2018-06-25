<?php

class Ticket{
  private $idTicket;
  private $numeroAtencion;
  private $estado;
  private $horaAtencion;
  private $idCliente;
  private $idAreaAtencion;
  private $idSucursal;

  function __construct(){

  }

  function getIdTicket(){
    return $this->idTiket;
  }

  function getNumeroAtencion(){
    return $this->numeroAtencion;
  }

  function getEstado(){
    return $this->estado;
  }

  function getHoraAtencion(){
    return $this->horaAtencion;
  }

  function getIdCliente(){
    return $this->idCliente;
  }

  function getIdAreaAtencion(){
    return $this->idAreaAtencion;
  }

  function getIdSucursal(){
    return $this->idSucursal;
  }

  function setIdTicket($idTicket){
    $this->idTiket = $idTicket;
  }

  function setNumeroAtencion($numeroAtencion){
    $this->numeroAtencion = $numeroAtencion;
  }

  function setEstado($estado){
    $this->estado = $estado;
  }

  function setHoraAtencion($horaAtencion){
    $this->horaAtencion = $horaAtencion;
  }

  function setIdCliente($idCliente){
    $this->idCliente = $idCliente;
  }

  function setIdAreaAtencion($idAreaAtencion){
    $this->idAreaAtencion = $idAreaAtencion;
  }

  function setIdSucursal($idSucursal){
    $this->idSucursal = $idSucursal;
  }
}
