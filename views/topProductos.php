<?php
    $top = $_POST['top'];
    $fD = $_POST['fechaD'];
    $fH = $_POST['fechaH'];
    $codAlmacen = $_POST['cod_almacen'];
    include('../arch/kpi.php');
    $resp = topProductos($top,$fD,$fH,$codAlmacen);
    echo $resp;
?>