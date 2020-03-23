

<?php
 session_start(); 
 include('../arch/datatables.php');

 $clientes =  GetClientes($_SESSION['target_almacen']);

 echo $clientes;
 

?>
