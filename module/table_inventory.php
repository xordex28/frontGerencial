<?php
 session_start(); 
 include('../arch/datatables.php');
$id = $_POST['id'];
$cdblTasa = GetTasa($_SESSION['target_almacen']);
  //echo $tasa;
  //
 if($id=='1'){
   $sql = "SELECT Codigo,Item,presentacion,
            precio_distribuidor / '$cdblTasa' as Precio_A,
            precio_Mayor /  '$cdblTasa' as Precio_B,
            precio_Oferta /  '$cdblTasa' as Precio_C,
            precio_PVP /   '$cdblTasa' as Precio_D,
            existencia
            FROM VIEW_existencia_3precios WHERE codalmacen = '".$_SESSION['target_almacen']."' ORDER BY Item";
  };
    if($id=='2'){

  };
    if($id=='3'){

  };
    if($id=='4'){

  };




  echo GetInventary($sql);

?>
