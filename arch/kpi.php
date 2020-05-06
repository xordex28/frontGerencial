<?php
 
 require_once('../config.php');
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
  CURLOPT_URL => 'http://'.URL.':'.PORT.'/'.DIR.'/onclientes',
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

function OffClientes($almacen){
    $curlHandler = curl_init();
    $data = array(
  'target_almacen' => $almacen
  
    );

    curl_setopt_array($curlHandler, [
  CURLOPT_URL => 'http://'.URL.':'.PORT.'/'.DIR.'/offclientes',
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
    CURLOPT_URL => 'http://'.URL.':'.PORT.'/'.DIR.'/onproductos',
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
    CURLOPT_URL => 'http://'.URL.':'.PORT.'/'.DIR.'/offproductos',
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
    CURLOPT_URL => 'http://'.URL.':'.PORT.'/'.DIR.'/salesdaydls',
    CURLOPT_RETURNTRANSFER => true,
    CURLINFO_HEADER_OUT => true,

    CURLOPT_POST => true,

    CURLOPT_POSTFIELDS => $data,
]);

$response = curl_exec($curlHandler);

curl_close($curlHandler);

 $obj = json_decode($response);
 
 echo number_format($obj->{'Total'},2,',','.');

  }

  function SalesDayBs($almacen){
    $curlHandler = curl_init();
    $data = array(
    'target_almacen' => $almacen
    
);

curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://'.URL.':'.PORT.'/'.DIR.'/salesdaybs',
    CURLOPT_RETURNTRANSFER => true,
    CURLINFO_HEADER_OUT => true,

    CURLOPT_POST => true,

    CURLOPT_POSTFIELDS => $data,
]);

$response = curl_exec($curlHandler);

curl_close($curlHandler);

 $obj = json_decode($response);
 
 echo number_format($obj->{'Total'},2,',','.');

  }

  function SalesMonthDls($almacen){
    $curlHandler = curl_init();
    $data = array(
    'target_almacen' => $almacen
    
);

curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://'.URL.':'.PORT.'/'.DIR.'/salesmonthdls',
    CURLOPT_RETURNTRANSFER => true,
    CURLINFO_HEADER_OUT => true,

    CURLOPT_POST => true,

    CURLOPT_POSTFIELDS => $data,
]);

$response = curl_exec($curlHandler);

curl_close($curlHandler);

 $obj = json_decode($response);
 
 echo number_format($obj->{'Total'},2,',','.');

}

function SalesMonthBs($almacen){
    $curlHandler = curl_init();
    $data = array(
    'target_almacen' => $almacen
    
);

curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://'.URL.':'.PORT.'/'.DIR.'/salesmonthbs',
    CURLOPT_RETURNTRANSFER => true,
    CURLINFO_HEADER_OUT => true,

    CURLOPT_POST => true,

    CURLOPT_POSTFIELDS => $data,
]);

$response = curl_exec($curlHandler);

curl_close($curlHandler);

 $obj = json_decode($response);
 
 echo number_format($obj->{'Total'},2,',','.');

  }

  function topProductos($top,$fD,$fH,$codAlmacen,$linea,$subLinea){
    $curlHandler = curl_init();
    $data = array(
    'top' => $top,
    'fD' => $fD,
    'fH' => $fH,
    'codAlmacen' => $codAlmacen,
    'linea' => $linea,
    'subLinea' => $subLinea
        );    

    curl_setopt_array($curlHandler, [
        CURLOPT_URL => 'http://'.URL.':'.PORT.'/'.DIR.'/topProductos',
        CURLOPT_RETURNTRANSFER => true,
        CURLINFO_HEADER_OUT => true,

        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $data,
    ]);

    $response = curl_exec($curlHandler);

      curl_close($curlHandler);
      
      return $response;

  }

  function topClientes($top,$fD,$fH,$codAlmacen,$zona,$canal,$moneda){
    $curlHandler = curl_init();
    $data = array(
    'top' => $top,
    'fD' => $fD,
    'fH' => $fH,
    'codAlmacen' => $codAlmacen,
    'zona' => $zona,
    'canal' => $canal,
    'moneda' => $moneda
        );    

    curl_setopt_array($curlHandler, [
        CURLOPT_URL => 'http://'.URL.':'.PORT.'/'.DIR.'/topClientes',
        CURLOPT_RETURNTRANSFER => true,
        CURLINFO_HEADER_OUT => true,

        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $data,
    ]);

    $response = curl_exec($curlHandler);

      curl_close($curlHandler);
      
      return $response;

  }

  function topVendedores($top,$fD,$fH,$codAlmacen,$moneda){
    $curlHandler = curl_init();
    $data = array(
    'top' => $top,
    'fD' => $fD,
    'fH' => $fH,
    'codAlmacen' => $codAlmacen,
    'moneda' => $moneda
        );    

    curl_setopt_array($curlHandler, [
        CURLOPT_URL => 'http://'.URL.':'.PORT.'/'.DIR.'/topVendedores',
        CURLOPT_RETURNTRANSFER => true,
        CURLINFO_HEADER_OUT => true,

        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $data,
    ]);

    $response = curl_exec($curlHandler);

      curl_close($curlHandler);
      
      return $response;

  }

  function getZona(){
    $curlHandler = curl_init();

    curl_setopt_array($curlHandler, [
        CURLOPT_URL => 'http://'.URL.':'.PORT.'/'.DIR.'/getZonas',
        CURLOPT_RETURNTRANSFER => true,
        CURLINFO_HEADER_OUT => true,
    ]);

    $response = curl_exec($curlHandler);

      curl_close($curlHandler);
      
      return $response;

  }

  function getCanal(){
    $curlHandler = curl_init();

    curl_setopt_array($curlHandler, [
        CURLOPT_URL => 'http://'.URL.':'.PORT.'/'.DIR.'/getCanal',
        CURLOPT_RETURNTRANSFER => true,
        CURLINFO_HEADER_OUT => true,
    ]);

    $response = curl_exec($curlHandler);

      curl_close($curlHandler);
      
      return $response;

  }

  function getLinea(){
    $curlHandler = curl_init();

    curl_setopt_array($curlHandler, [
        CURLOPT_URL => 'http://'.URL.':'.PORT.'/'.DIR.'/getLinea',
        CURLOPT_RETURNTRANSFER => true,
        CURLINFO_HEADER_OUT => true,
    ]);

    $response = curl_exec($curlHandler);

      curl_close($curlHandler);
      
      return $response;

  }

  function getSublinea($linea){
    $curlHandler = curl_init();
    $url = "";
    if(isset($linea)){
        if($linea!=""){
            $url ="http://'.URL.':'.PORT.'/'.DIR.'/getSubLinea/".$linea;
        }else{
            $url = "http://'.URL.':'.PORT.'/'.DIR.'/getSubLinea";
        }
    }else{
        $url = "http://'.URL.':'.PORT.'/'.DIR.'/getSubLinea";
    }
    curl_setopt_array($curlHandler, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLINFO_HEADER_OUT => true,
    ]);

    $response = curl_exec($curlHandler);

      curl_close($curlHandler);
      
      return $response;

  }

  function documentsExpiredBs($almacen){
    $curlHandler = curl_init();
    $data = array(
    'target_almacen' => $almacen
    
    );

    curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://'.URL.':'.PORT.'/'.DIR.'/documentsExpiredBs',
    CURLOPT_RETURNTRANSFER => true,
    CURLINFO_HEADER_OUT => true,

    CURLOPT_POST => true,

    CURLOPT_POSTFIELDS => $data,
    ]);

    $response = curl_exec($curlHandler);

    curl_close($curlHandler);

    $obj = json_decode($response);
 
    echo number_format($obj->{'Total'},2,',','.');

  }

  function documentsExpiredDls($almacen){
    $curlHandler = curl_init();
    $data = array(
    'target_almacen' => $almacen
    
    );

    curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://'.URL.':'.PORT.'/'.DIR.'/documentsExpiredDls',
    CURLOPT_RETURNTRANSFER => true,
    CURLINFO_HEADER_OUT => true,

    CURLOPT_POST => true,

    CURLOPT_POSTFIELDS => $data,
    ]);

    $response = curl_exec($curlHandler);

    curl_close($curlHandler);

    $obj = json_decode($response);
 
    echo number_format($obj->{'Total'},2,',','.');

  }

?>
 