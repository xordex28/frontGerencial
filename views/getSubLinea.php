<?php
    include('../arch/kpi.php');
    $linea = isset($_POST['linea'])?$_POST['linea']:'';
    $resp = getSublinea($linea);
    echo $resp;
?>