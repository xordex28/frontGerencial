<?php
session_start(); 
include('../arch/datatables.php');

$cdblTasa = GetTasa($_SESSION['target_almacen']);
$moneda = isset($_POST['moneda'])?$_POST['moneda']:0;
$fechaD = isset($_POST['fechaD'])?$_POST['fechaD']:0;
$fechaH = isset($_POST['fechaH'])?$_POST['fechaH']:0;
$sql = "";
  //echo $tasa;
if($moneda==0){
 $sql = "SELECT nombres,nombre,iddoc,fechaemision,fechavencimiento,montooriginal,montoabonado,saldoactual FROM View_ctasxcobrar
WHERE fechaemision BETWEEN '$fechaD' AND '$fechaH' 
AND codalmacen = '".$_SESSION['target_almacen']."'";
}
if($moneda==1){
  $sql = "SELECT nombres,nombre,iddoc,fechaemision,fechavencimiento,montooriginal/TASA AS MONTOORIGINAL,
montoabonado/TASA AS MONTOABONADO, saldoactual/TASA AS SALDOACTUAL 
FROM View_ctasxcobrar
WHERE fechaemision BETWEEN '$fechaD' AND '$fechaH' 
AND codalmacen = '".$_SESSION['target_almacen']."'";
}
echo $sql;
//echo GetCxc($sql);

?>
