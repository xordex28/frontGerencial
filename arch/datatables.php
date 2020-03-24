<?php
 
   function GetClientes($almacen){
    $curlHandler = curl_init();
    $data = array(
    'target_almacen' => $almacen
    
);

curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://oesvica.ddns.net:9011/slimframework_v3/getclients',
    CURLOPT_RETURNTRANSFER => true,
    CURLINFO_HEADER_OUT => true,

    CURLOPT_POST => true,

    CURLOPT_POSTFIELDS => $data,
]);

$response = curl_exec($curlHandler);

curl_close($curlHandler);
	$datas=array();
  $obj = json_decode($response);

 foreach ($obj as $key => $value){
  $subdata=array();
  $subdata[] = '';
   $subdata[] = $value->{'cedula'};
   $subdata[] = $value->{'nombrecompleto'};
   $subdata[] = $value->{'tlf1'};
   $subdata[] = $value->{'tlf2'};
   $subdata[] = $value->{'estado'};
   $subdata[] = $value->{'ciudad'};
   $subdata[] = $value->{'municipio'};
   $subdata[] = $value->{'contacto'};
   $subdata[] = $value->{'direccion'};
   $subdata[] = $value->{'pais'};
   $subdata[] = $value->{'zona'};
   $subdata[] = $value->{'canal'};
   $subdata[] = $value->{'email'};
   $subdata[] = $value->{'status'};
  
  $datas[]=$subdata;
 }
   
$json_data_auto=array(
    "data" =>  $datas
);

return json_encode($json_data_auto);


  }

function GetTasa($almacen){
    $curlHandler = curl_init();
    $data = array(
    'target_almacen' => $almacen
    
);

curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://oesvica.ddns.net:9011/slimframework_v3/gettasa',
    CURLOPT_RETURNTRANSFER => true,
    CURLINFO_HEADER_OUT => true,

    CURLOPT_POST => true,

    CURLOPT_POSTFIELDS => $data,
]);

$response = curl_exec($curlHandler);

curl_close($curlHandler);

 $obj = json_decode($response);
return $response;
//echo $obj->{'Clientes'};

  }

function GetInventary($sql){
    $curlHandler = curl_init();
    $data = array(
    'sql' => $sql
    
);

curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://oesvica.ddns.net:9011/slimframework_v3/getinventary',
    CURLOPT_RETURNTRANSFER => true,
    CURLINFO_HEADER_OUT => true,

    CURLOPT_POST => true,

    CURLOPT_POSTFIELDS => $data,
]);

$response = curl_exec($curlHandler);

curl_close($curlHandler);
  $datas=array();
  $obj = json_decode($response);

 foreach ($obj as $key => $value){
  $subdata=array();
  $subdata[] = '';
   $subdata[] = $value->{'Codigo'};
   $subdata[] = $value->{'Item'};
   $subdata[] = $value->{'presentacion'};
   $subdata[] = $value->{'Precio_A'};
   $subdata[] = $value->{'Precio_B'};
   $subdata[] = $value->{'Precio_C'};
   $subdata[] = $value->{'Precio_D'};
   $subdata[] = $value->{'existencia'};

  
  $datas[]=$subdata;
 }
   
$json_data_auto=array(
    "data" =>  $datas
);

return json_encode($json_data_auto);


  }

function GetCxc($sql){
    $curlHandler = curl_init();
    $data = array(
    'sql' => $sql
    
);

curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://oesvica.ddns.net:9011/slimframework_v3/getcxc',
    CURLOPT_RETURNTRANSFER => true,
    CURLINFO_HEADER_OUT => true,

    CURLOPT_POST => true,

    CURLOPT_POSTFIELDS => $data,
]);

$response = curl_exec($curlHandler);

curl_close($curlHandler);
  $datas=array();
  $obj = json_decode($response);

 foreach ($obj as $key => $value){
  $subdata=array();
  $subdata[] = '';
   $subdata[] = $value->{'Codigo'};
   $subdata[] = $value->{'Item'};
   $subdata[] = $value->{'presentacion'};
   $subdata[] = $value->{'Precio_A'};
   $subdata[] = $value->{'Precio_B'};
   $subdata[] = $value->{'Precio_C'};
   $subdata[] = $value->{'Precio_D'};
   $subdata[] = $value->{'existencia'};

  
  $datas[]=$subdata;
 }
   
$json_data_auto=array(
    "data" =>  $datas
);

return json_encode($json_data_auto);


  }





?>