<?php
    $top = $_POST['top'];
    $fD = $_POST['fechaD'];
    $fH = $_POST['fechaH'];
    $codAlmacen = $_POST['cod_almacen'];
    $linea = $_POST['linea'];
    $subLinea = $_POST['subLinea'];
    include('../arch/kpi.php');
    $resp = topProductos($top,$fD,$fH,$codAlmacen,$linea,$subLinea);
    echo $resp;
?>