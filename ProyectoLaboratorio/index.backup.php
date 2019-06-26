<?php
 require 'controller/mvc.controller.php';

     //se instancia al controlador 
 $mvc = new mvc_controller();

 if( $_GET['action'] == 'reservar' ) //muestra el modulo de reserva
 {
   $mvc->reservar();
 }
 else if( $_GET['action'] == 'consultar' ) //muestra el modulo de consultar de las reservas
 {
   $mvc->consultar();
 }
  else if( $_GET['action'] == 'inventario' ) //muestra el modulo de monitor inventario
 {
   $mvc->inventario();
 }
  else if( $_GET['action'] == 'cuenta' ) //muestra el modulo de la cuenta usuario
 {
   $mvc->cuenta();
 }
  else if( $_GET['action'] == 'registrar' ) //muestra el modulo de monitor registrar usuario
 {
   $mvc->registrar();
 }
 else if( isset($_POST['carrera']) && isset($_POST['cantidad']) )//muestra el buscador y los resultados
 {
   $mvc->buscar( $_POST['carrera'], $_POST['cantidad'] );
 }
 else //Si no existe GET o POST -> muestra la pagina principal
 {
  $mvc->principal();
 }
?>