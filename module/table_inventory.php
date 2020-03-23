<?php
 session_start(); 
 include('../arch/datatables.php');

$cdblTasa = GetTasa($_SESSION['target_almacen']);
  //echo $tasa;
  //
 
   $sql = "SELECT Codigo,Item,presentacion,
            precio_distribuidor / '$cdblTasa' as Precio_A,
            precio_Mayor /  '$cdblTasa' as Precio_B,
            precio_Oferta /  '$cdblTasa' as Precio_C,
            precio_PVP /   '$cdblTasa' as Precio_D,
            existencia
            FROM VIEW_existencia_3precios WHERE codalmacen = '".$_SESSION['target_almacen']."' ORDER BY Item";





  echo GetInventary($sql);

?>
