<?php
 

 function _data_last_month_day() { 
    $month = date('m');
    $year = date('Y');
    $day = date("d", mktime(0,0,0, $month+1, 0, $year));

    return date('Y-m-d', mktime(0,0,0, $month, $day, $year));
};

/** Actual month first day **/
function _data_first_month_day() {
    $month = date('m');
    $year = date('Y');
    return date('Y-m-d', mktime(0,0,0, $month, 1, $year));
}

 function OnClientes($almacen){
  	$curlHandler = curl_init();
  	$data = array(
    'target_almacen' => $almacen
    
);

curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://oesvica.ddns.net:9011/slimframework_v3/onclientes',
    CURLOPT_RETURNTRANSFER => true,
    CURLINFO_HEADER_OUT => true,

    CURLOPT_POST => true,

    CURLOPT_POSTFIELDS => $data,
]);

$response = curl_exec($curlHandler);

curl_close($curlHandler);

 $obj = json_decode($response);

echo $obj->{'Clientes'};

  }

function OnProductos($almacen){
    $curlHandler = curl_init();
    $data = array(
    'target_almacen' => $almacen
    
);

curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://oesvica.ddns.net:9011/slimframework_v3/onproductos',
    CURLOPT_RETURNTRANSFER => true,
    CURLINFO_HEADER_OUT => true,

    CURLOPT_POST => true,

    CURLOPT_POSTFIELDS => $data,
]);

$response = curl_exec($curlHandler);

curl_close($curlHandler);

 $obj = json_decode($response);
 
echo $obj->{'Producto'};

  }

function OffProductos($almacen){
    $curlHandler = curl_init();
    $data = array(
    'target_almacen' => $almacen
    
);

curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://oesvica.ddns.net:9011/slimframework_v3/offproductos',
    CURLOPT_RETURNTRANSFER => true,
    CURLINFO_HEADER_OUT => true,

    CURLOPT_POST => true,

    CURLOPT_POSTFIELDS => $data,
]);

$response = curl_exec($curlHandler);

curl_close($curlHandler);

 $obj = json_decode($response);
 
echo $obj->{'Producto'};

  }

function SalesDayDls($almacen){
    $curlHandler = curl_init();
    $data = array(
    'target_almacen' => $almacen
    
);

curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://oesvica.ddns.net:9011/slimframework_v3/salesdaydls',
    CURLOPT_RETURNTRANSFER => true,
    CURLINFO_HEADER_OUT => true,

    CURLOPT_POST => true,

    CURLOPT_POSTFIELDS => $data,
]);

$response = curl_exec($curlHandler);

curl_close($curlHandler);

 $obj = json_decode($response);
 
echo $obj->{'Total'};

  }

function SalesDayBs($almacen){
    $curlHandler = curl_init();
    $data = array(
    'target_almacen' => $almacen
    
);

curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://oesvica.ddns.net:9011/slimframework_v3/salesdaybs',
    CURLOPT_RETURNTRANSFER => true,
    CURLINFO_HEADER_OUT => true,

    CURLOPT_POST => true,

    CURLOPT_POSTFIELDS => $data,
]);

$response = curl_exec($curlHandler);

curl_close($curlHandler);

 $obj = json_decode($response);
 
echo $obj->{'Total'};

  }

  function SalesMonthDls($almacen){
    $curlHandler = curl_init();
    $data = array(
    'target_almacen' => $almacen
    
);

curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://oesvica.ddns.net:9011/slimframework_v3/salesmonthdls',
    CURLOPT_RETURNTRANSFER => true,
    CURLINFO_HEADER_OUT => true,

    CURLOPT_POST => true,

    CURLOPT_POSTFIELDS => $data,
]);

$response = curl_exec($curlHandler);

curl_close($curlHandler);

 $obj = json_decode($response);
 
echo $obj->{'Total'};

}

function SalesMonthBs($almacen){
    $curlHandler = curl_init();
    $data = array(
    'target_almacen' => $almacen
    
);

curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://oesvica.ddns.net:9011/slimframework_v3/salesmonthbs',
    CURLOPT_RETURNTRANSFER => true,
    CURLINFO_HEADER_OUT => true,

    CURLOPT_POST => true,

    CURLOPT_POSTFIELDS => $data,
]);

$response = curl_exec($curlHandler);

curl_close($curlHandler);

 $obj = json_decode($response);
 
echo $obj->{'Total'};

  }

<<<<<<< HEAD
  function topProductos($top,$fD,$fH,$codAlmacen){
=======
    function topProductos($top,$fD,$fH,$codAlmacen){
>>>>>>> eliezer
    $curlHandler = curl_init();
    $data = array(
    'top' => $top,
    'fD' => $fD,
    'fH' => $fH,
    'codAlmacen' => $codAlmacen
        );    

    curl_setopt_array($curlHandler, [
        CURLOPT_URL => 'http://oesvica.ddns.net:9011/slimframework_v3/topProductos',
        CURLOPT_RETURNTRANSFER => true,
        CURLINFO_HEADER_OUT => true,

        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $data,
    ]);
<<<<<<< HEAD
=======

    $response = curl_exec($curlHandler);

      curl_close($curlHandler);
      
      return $response;

  }

>>>>>>> eliezer

    $response = curl_exec($curlHandler);

      curl_close($curlHandler);
      
      return $response;

  }





?>
 