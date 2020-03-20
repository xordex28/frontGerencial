<?php 
   session_start(); 
echo "hola";
  $id = $_POST['id'];
  $descripcion = isset($_POST['descripcion'])?$_POST['descripcion']:'';
  $_SESSION['target_almacen'] = $id;
  $_SESSION['descripcion_almacen'] = $descripcion;
?>
