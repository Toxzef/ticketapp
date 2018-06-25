<?php

include_once 'datos/Conexion.php';
include_once 'entidad/Empleado.php';

class EmpleadoService{

  private $conexion;

  function __construct(){
    $this->conexion = new Conexion();
  }


  function buscar($id){

    $sql = "SELECT * FROM ticketapp.Empleado WHERE idEmpleado = $id";

    $result = $this->conexion->query($sql);

    $datos = mysqli_fetch_assoc($result);

    $e = new Empleado();

    $e->setIdEmpleado($datos["idEmpleado"]);
    $e->setNombre($datos["Nombre"]);
    $e->setClave($datos["Clave"]);
    $e->setRut($datos["Rut"]);
    $e->setIdSucursal($datos["idSucursal"]);
    $e->setIdAreaAtencion($datos["idAreaAtencion"]);

    return $e;
  }

  function verificar($rut, $password){
    $sql = "SELECT * FROM ticketapp.Empleado WHERE Rut = '$rut' AND clave = '$password'";

    $result = $this->conexion->query($sql);

    $c = mysqli_num_rows($result);

    if($c == 0){
      return 0;
    } else {
      $datos = mysqli_fetch_assoc($result);
      $idEmpleado = $datos["idEmpleado"];
      return $this->buscar($idEmpleado);
    }
  }
}
