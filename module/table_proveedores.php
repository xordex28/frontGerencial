
<?php
 session_start(); 
 include('../arch/datatables.php');

 $proveedores =  GetProveedores($_SESSION['target_almacen']);

 echo $proveedores;
 

?>
