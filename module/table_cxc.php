<?php
session_start(); 
include('../arch/datatables.php');

$cdblTasa = GetTasa($_SESSION['target_almacen']);
$moneda = isset($_POST['moneda'])?$_POST['moneda']:0;
$pendiente = isset($_POST['pendiente'])?$_POST['pendiente']:0;
$fechaD = isset($_POST['fechaD'])?$_POST['fechaD']:0;
$fechaH = isset($_POST['fechaH'])?$_POST['fechaH']:0;
$sql = "";
  //echo $tasa;
if($moneda==0){
  if($pendiente == 0){
    $sql = "SELECT nombres,nombre,iddoc,CONVERT(VARCHAR(10), fechaemision, 103) as fechaemision,
    CONVERT(VARCHAR(10), fechavencimiento, 103) as fechavencimiento,montooriginal,montoabonado,saldoactual 
    FROM View_ctasxcobrar
    WHERE fechaemision BETWEEN '$fechaD' AND '$fechaH' AND montooriginal > 0
    AND codalmacen = '".$_SESSION['target_almacen']."'";
  }
  if($pendiente == 1){
    $sql = "SELECT nombres,nombre,iddoc,CONVERT(VARCHAR(10), fechaemision, 103) as fechaemision,
CONVERT(VARCHAR(10), fechavencimiento, 103) as fechavencimiento,montooriginal,montoabonado,saldoactual 
FROM View_ctasxcobrar
WHERE fechaemision BETWEEN '$fechaD' AND '$fechaH' AND montooriginal > 0 AND montooriginal = montoabonado 
AND codalmacen = '".$_SESSION['target_almacen']."'";
  }
  if($pendiente == 2){
    $sql = "SELECT nombres,nombre,iddoc,CONVERT(VARCHAR(10), fechaemision, 103) as fechaemision,
CONVERT(VARCHAR(10), fechavencimiento, 103) as fechavencimiento,montooriginal,montoabonado,saldoactual 
FROM View_ctasxcobrar
WHERE fechaemision BETWEEN '$fechaD' AND '$fechaH' AND montooriginal > 0 AND montooriginal <> montoabonado
AND codalmacen = '".$_SESSION['target_almacen']."'";
  }
  if($pendiente == 3){
    $sql = "SELECT nombres,nombre,iddoc,CONVERT(VARCHAR(10), fechaemision, 103) as fechaemision,
    CONVERT(VARCHAR(10), fechavencimiento, 103) as fechavencimiento,montooriginal,montoabonado,saldoactual 
    FROM View_ctasxcobrar
    WHERE fechaemision BETWEEN '$fechaD' AND '$fechaH' AND montooriginal > 0 AND montooriginal <> montoabonado AND fechavencimiento < getdate()
    AND codalmacen = '".$_SESSION['target_almacen']."'";
  }
  if($pendiente == 4){
    $sql = "SELECT nombres,nombre,iddoc,CONVERT(VARCHAR(10), fechaemision, 103) as fechaemision,
    CONVERT(VARCHAR(10), fechavencimiento, 103) as fechavencimiento,montooriginal,montoabonado,saldoactual 
    FROM View_ctasxcobrar
    WHERE fechaemision BETWEEN '$fechaD' AND '$fechaH' AND montooriginal > 0 AND montooriginal <> montoabonado AND fechavencimiento > getdate()
    AND codalmacen = '".$_SESSION['target_almacen']."'";
  }


}
if($moneda==1){
  if($pendiente == 0){
    $sql = "SELECT nombres,nombre,iddoc,CONVERT(VARCHAR(10), fechaemision, 103) as fechaemision,
    CONVERT(VARCHAR(10), fechavencimiento, 103) as fechavencimiento,montooriginal/TASA AS montooriginal,
    montoabonado/TASA AS montoabonado,saldoactual/TASA AS saldoactual
    FROM View_ctasxcobrar
    WHERE fechaemision BETWEEN '$fechaD' AND '$fechaH' AND montooriginal > 0
    AND codalmacen = '".$_SESSION['target_almacen']."'";
  }
  if($pendiente == 1){
    $sql = "SELECT nombres,nombre,iddoc,CONVERT(VARCHAR(10), fechaemision, 103) as fechaemision,
    CONVERT(VARCHAR(10), fechavencimiento, 103) as fechavencimiento,montooriginal/TASA AS montooriginal,
    montoabonado/TASA AS montoabonado,saldoactual/TASA AS saldoactual
    FROM View_ctasxcobrar
    WHERE fechaemision BETWEEN '$fechaD' AND '$fechaH' AND montooriginal > 0 AND montooriginal = montoabonado 
    AND codalmacen = '".$_SESSION['target_almacen']."'";
  }
  if($pendiente == 2){
    $sql = "SELECT nombres,nombre,iddoc,CONVERT(VARCHAR(10), fechaemision, 103) as fechaemision,
    CONVERT(VARCHAR(10), fechavencimiento, 103) as fechavencimiento,montooriginal/TASA AS montooriginal,
    montoabonado/TASA AS montoabonado,saldoactual/TASA AS saldoactual
    FROM View_ctasxcobrar
    WHERE fechaemision BETWEEN '$fechaD' AND '$fechaH' AND montooriginal > 0 AND montooriginal <> montoabonado
    AND codalmacen = '".$_SESSION['target_almacen']."'";
  }
  if($pendiente == 3){
    $sql = "SELECT nombres,nombre,iddoc,CONVERT(VARCHAR(10), fechaemision, 103) as fechaemision,
    CONVERT(VARCHAR(10), fechavencimiento, 103) as fechavencimiento,montooriginal/TASA AS montooriginal,
    montoabonado/TASA AS montoabonado,saldoactual/TASA AS saldoactual
    FROM View_ctasxcobrar
    WHERE fechaemision BETWEEN '$fechaD' AND '$fechaH' AND montooriginal > 0 AND montooriginal <> montoabonado AND fechavencimiento < getdate()
    AND codalmacen = '".$_SESSION['target_almacen']."'";
  }
  if($pendiente == 4){
    $sql = "SELECT nombres,nombre,iddoc,CONVERT(VARCHAR(10), fechaemision, 103) as fechaemision,
    CONVERT(VARCHAR(10), fechavencimiento, 103) as fechavencimiento,montooriginal/TASA AS montooriginal,
    montoabonado/TASA AS montoabonado,saldoactual/TASA AS saldoactual
    FROM View_ctasxcobrar
    WHERE fechaemision BETWEEN '$fechaD' AND '$fechaH' AND montooriginal > 0 AND montooriginal <> montoabonado AND fechavencimiento > getdate()
    AND codalmacen = '".$_SESSION['target_almacen']."'";
  }

}
//echo $sql;
echo GetCxc($sql);

?>
