<?php
    $top = $_POST['top'];
    $fD = $_POST['fechaD'];
    $fH = $_POST['fechaH'];
    $codAlmacen = $_POST['cod_almacen'];
    $zona = $_POST['zona'];
    $canal = $_POST['canal'];
    $moneda = $_POST['moneda'];
    include('../arch/kpi.php');
    $resp = topClientes($top,$fD,$fH,$codAlmacen,$zona,$canal,$moneda);
    echo $resp;
?>