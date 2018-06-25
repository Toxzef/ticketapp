<?php

class Empleado {
  private $idEmpleado;
  private $rut;
  private $nombre;
  private $clave;
  private $idAreaAtencion;
  private $idSucursal;

  function __construct(){

  }

  function getIdEmpleado(){
    return $this->idEmpleado;
  }

  function getRut(){
    return $this->rut;
  }

  function getNombre(){
    return $this->nombre;
  }

  function getClave(){
    return $this->clave;
  }

  function getIdAreaAtencion(){
    return $this->idAreaAtencion;
  }

  function getIdSucursal(){
    return $this->idSucursal;
  }

  function setIdEmpleado($idEmpleado){
    $this->idEmpleado = $idEmpleado;
  }

  function setRut($rut){
    $this->rut = $rut;
  }

  function setNombre($nombre){
    $this->nombre = $nombre;
  }

  function setClave($clave){
    $this->clave = $clave;
  }

  function setIdAreaAtencion($idAreaAtencion){
    $this->idAreaAtencion = $idAreaAtencion;
  }

  function setIdSucursal($idSucursal){
    $this->idSucursal = $idSucursal;
  }
}
