<?php 
   session_start(); 

  $id = $_POST['id'];
  $_SESSION['target_almacen'] = $id;
  echo  $_SESSION['target_almacen'];
?>
