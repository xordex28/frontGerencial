<?php
    $top = $_POST['top'];
    $fD = $_POST['fechaD'];
    $fH = $_POST['fechaH'];
    $codAlmacen = $_POST['cod_almacen'];
    $moneda = $_POST['moneda'];
    include('../arch/kpi.php');
    $resp = topVendedores($top,$fD,$fH,$codAlmacen,$moneda);
    echo $resp;
?>