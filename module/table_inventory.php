<?php
session_start(); 
include('../arch/datatables.php');

$cdblTasa = GetTasa($_SESSION['target_almacen']);
$moneda = isset($_POST['moneda'])?$_POST['moneda']:0;
$iva = isset($_POST['iva'])?$_POST['iva']:0;
  //echo $tasa;
if($moneda==0 && $iva==0){
 $sql = "SELECT Codigo, Item, presentacion,
 precio_distribuidor as Precio_A,
 precio_Mayor as Precio_B,
 precio_Oferta as Precio_C,
 precio_PVP as Precio_D,
 existencia
FROM VIEW_existencia_3precios WHERE codalmacen ='".$_SESSION['target_almacen']."' ORDER BY Item";
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
  $sql = "SELECT VIEW_existencia_3precios.Codigo,
  VIEW_existencia_3precios.Item, VIEW_existencia_3precios.presentacion,
  VIEW_existencia_3precios.precio_distribuidor / tbl_almacenes.tasa as Precio_A,
  VIEW_existencia_3precios.precio_Mayor / tbl_almacenes.tasa as Precio_B,
  VIEW_existencia_3precios.precio_Oferta / tbl_almacenes.tasa as Precio_C,
  VIEW_existencia_3precios.precio_PVP / tbl_almacenes.tasa as Precio_D,
  VIEW_existencia_3precios.existencia
  FROM VIEW_existencia_3precios INNER JOIN tbl_almacenes ON VIEW_existencia_3precios.CodAlmacen = tbl_almacenes.CodAlmacen
  WHERE VIEW_existencia_3precios.codalmacen ='".$_SESSION['target_almacen']."' ORDER BY VIEW_existencia_3precios.Item";
}
if($moneda==1 && $iva==1){
 $sql = "SELECT VIEW_existencia_3precios.Codigo, 
 VIEW_existencia_3precios.Item, VIEW_existencia_3precios.presentacion,
 VIEW_existencia_3precios.precio_dist / tbl_almacenes.tasa as Precio_A,
 VIEW_existencia_3precios.precio_May / tbl_almacenes.tasa as Precio_B,
 VIEW_existencia_3precios.precio_Ofer / tbl_almacenes.tasa as Precio_C,
 VIEW_existencia_3precios.precio_PV / tbl_almacenes.tasa as Precio_D,
 VIEW_existencia_3precios.existencia 
 FROM VIEW_existencia_3precios INNER JOIN tbl_almacenes ON VIEW_existencia_3precios.CodAlmacen = tbl_almacenes.CodAlmacen
 WHERE VIEW_existencia_3precios.codalmacen ='".$_SESSION['target_almacen']."' ORDER BY VIEW_existencia_3precios.Item";
}


echo GetInventary($sql);

?>
