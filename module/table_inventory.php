<?php
session_start(); 
include('../arch/datatables.php');

$cdblTasa = GetTasa($_SESSION['target_almacen']);
$moneda = isset($_POST['moneda'])?$_POST['moneda']:0;
$iva = isset($_POST['iva'])?$_POST['iva']:0;
  //echo $tasa;
if($moneda==0 && $iva==0){
 $sql = "SELECT Codigo,Item,presentacion,
 precio_distribuidor as Precio_A,
 precio_Mayor as Precio_B,
 precio_Oferta as Precio_C,
 precio_PVP as Precio_D,
 existencia
 FROM VIEW_existencia_3precios WHERE codalmacen = '".$_SESSION['target_almacen']."' ORDER BY Item";
}
if($moneda==0 && $iva==1){
  $sql = " SELECT Codigo,Item,presentacion,
  precio_dist as Precio_A,
  precio_May as Precio_B,
  precio_Ofer as Precio_C,
  precio_PV as Precio_D,
  existencia
  FROM VIEW_existencia_3precios WHERE codalmacen ='".$_SESSION['target_almacen']."' ORDER BY Item";
}
if($moneda==1 && $iva==0){
  $sql = "SELECT Codigo,Item,presentacion,
  precio_distribuidor / '$cdblTasa' as Precio_A,
  precio_Mayor /  '$cdblTasa' as Precio_B,
  precio_Oferta /  '$cdblTasa' as Precio_C,
  precio_PVP /   '$cdblTasa' as Precio_D,
  existencia
  FROM VIEW_existencia_3precios WHERE codalmacen = '".$_SESSION['target_almacen']."' ORDER BY Item";
}
if($moneda==1 && $iva==1){
 $sql = "SELECT Codigo,Item,presentacion,
 precio_dist / cdblTasa as Precio_A,
 precio_May / cdblTasa as Precio_B,
 precio_Ofer / cdblTasa as Precio_C,
 precio_PV / cdblTasa as Precio_D,
 existencia
 FROM VIEW_existencia_3precios WHERE codalmacen = '".$_SESSION['target_almacen']."' ORDER BY Item";
}







echo GetInventary($sql);

?>
