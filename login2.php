<?php

include_once 'servicio/EmpleadoService.php';

$mensaje = "";

if (isset($_POST["txtRut"])){
  $rut = $_POST["txtRut"];
  $password = $_POST["txtPassword"];

  $es = new EmpleadoService();

  $empleado = $es->verificar($rut,$password);

  if($empleado == "0"){
    $mensaje = "Rut o contraseña incorrecta";
  } else {
    session_start();
    $_SESSION["idEmpleado"] = $empleado->getIdEmpleado();
    $_SESSION["nombre"] = $empleado->getNombre();
    $_SESSION["rut"] = $empleado->getRut();
    $_SESSION["idAreaAtencion"] = $empleado->getIdAreaAtencion();
    $_SESSION["idSucursal"] = $empleado->getIdSucursal();
    header ("location: index.php");
  }
}
