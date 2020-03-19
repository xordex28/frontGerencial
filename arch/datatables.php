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
   $subdata[] = $value->{'contacto'};
   $subdata[] = $value->{'tlf1'};
   $subdata[] = $value->{'tlf2'};
   $subdata[] = $value->{'pais'};
   $subdata[] = $value->{'estado'};
   $subdata[] = $value->{'ciudad'};
   $subdata[] = $value->{'municipio'};
   $subdata[] = $value->{'direccion'};
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

?>