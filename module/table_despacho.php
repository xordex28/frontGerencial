<?php
session_start(); 
include('../arch/datatables.php');
$tipo = isset($_POST['tipo'])?$_POST['tipo']:0;
$check = isset($_POST['check'])?$_POST['check']:0;
$fechaD = isset($_POST['fechaD'])?$_POST['fechaD']:0;
$fechaH = isset($_POST['fechaH'])?$_POST['fechaH']:0;
$sql = "";

  //echo $tasa;
if($tipo==0){
if($check==true){
 $sql = "SELECT numfactu as numero,CONVERT(VARCHAR(10), fechafac, 103)  as fecha,str_cliente_nombres + ' ' + str_cliente_apellidos as nombres,
ISNULL(str_transportista_nombre,'-') as name_transporte,ISNULL(nro_guia,'-') as guia, status_transportista, 
id_status, observacion from VIEW_Mfacturas WHERE CodAlmacen= '".$_SESSION['target_almacen']."' and 
(status_transportista='03' OR status_transportista='99') AND 
(fechafac between '$fechaD' AND '$fechaH') ORDER BY numfactu DESC";
	}else{
		$sql = "SELECT numfactu as numero,CONVERT(VARCHAR(10), fechafac, 103)  as fecha as fecha,str_cliente_nombres + ' ' + str_cliente_apellidos as nombres,
ISNULL(str_transportista_nombre,'-') as name_transporte,ISNULL(nro_guia,'-') as guia, status_transportista, 
id_status, observacion from VIEW_Mfacturas WHERE CodAlmacen= '".$_SESSION['target_almacen']."' and 
(status_transportista='03' OR status_transportista='99') AND id_status<>'99' AND 
(fechafac between '$fechaD' AND '$fechaH') ORDER BY numfactu DESC";
	}
}
if($tipo==1){
	if($check==true){
 $sql = "SELECT numnotae as numero,CONVERT(VARCHAR(10), fechanotae, 103) as fecha, str_cliente_nombres + ' ' + str_cliente_apellidos as nombres, 
ISNULL(str_transportista_nombre, '-') as name_transporte, ISNULL(nro_guia, '-') as guia, status_transportista, 
id_status, observacion From VIEW_MNotaEntrega WHERE CodAlmacen ='".$_SESSION['target_almacen']."' AND 
(status_transportista = '03' OR status_transportista='99') AND 
(fechanotae BETWEEN '$fechaD' AND '$fechaH') ORDER BY numnotae DESC";
	}else{
		$sql = "SELECT numnotae as numero, CONVERT(VARCHAR(10), fechanotae, 103) as fecha, str_cliente_nombres + ' ' + str_cliente_apellidos as nombres, 
ISNULL(str_transportista_nombre, '-') as name_transporte, ISNULL(nro_guia, '-') as guia, status_transportista, id_status, observacion 
From VIEW_MNotaEntrega WHERE CodAlmacen ='".$_SESSION['target_almacen']."' AND 
(status_transportista = '03' OR status_transportista='99') AND id_status <> '99' AND 
(fechanotae BETWEEN '$fechaD' AND '$fechaH') ORDER BY numnotae DESC";
	}
 
}
//echo $sql;
echo GetDesp($sql);

?>