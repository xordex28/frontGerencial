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
    $status = "";
    if($value->{'status'}==0){
      $status = 'Inactivo';
    }else{
      $status = 'Activo';
    }
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
    $subdata[] = $status;
    
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
    $subdata[] = isset($value->{'Precio_A'})?number_format($value->{'Precio_A'},2,',','.'):'0';
    $subdata[] = isset($value->{'Precio_B'})?number_format($value->{'Precio_B'},2,',','.'):'0';
    $subdata[] = isset($value->{'Precio_C'})?number_format($value->{'Precio_C'},2,',','.'):'0';
    $subdata[] = isset($value->{'Precio_D'})?number_format($value->{'Precio_D'},2,',','.'):'0';
    $subdata[] = isset($value->{'existencia'})?number_format($value->{'existencia'},2,',','.'):'0';
    
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
    $subdata[] = isset($value->{'nombres'})?$value->{'nombres'}:'';
    $subdata[] = isset($value->{'nombre'})?$value->{'nombre'}:'';
    $subdata[] = isset($value->{'iddoc'})?$value->{'iddoc'}:'';
    $subdata[] = isset($value->{'fechaemision'})?$value->{'fechaemision'}->{'date'}:null;
    $subdata[] = isset($value->{'fechavencimiento'})?$value->{'fechavencimiento'}->{'date'}:null;
    $subdata[] = isset($value->{'montooriginal'})?number_format($value->{'montooriginal'},2,',','.'):'0';
    $subdata[] = isset($value->{'montoabonado'})?number_format($value->{'montoabonado'},2,',','.'):'0';
    $subdata[] = isset($value->{'saldoactual'})?number_format($value->{'saldoactual'},2,',','.'):'0';

    
    $datas[]=$subdata;
  }
  
  $json_data_auto=array(
    "data" =>  $datas
  );

  return json_encode($json_data_auto);


}

function GetProveedores($almacen){
  $curlHandler = curl_init();
  $data = array(
    'target_almacen' => $almacen
    
  );

  curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://oesvica.ddns.net:9011/slimframework_v3/getproveedores',
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
        $status = "";
    if($value->{'status'}==0){
      $status = 'Inactivo';
    }else{
      $status = 'Activo';
    }
    $subdata=array();
    $subdata[] = '';
    $subdata[] = $value->{'Rif'};
    $subdata[] = $value->{'RazonSocial'};
    $subdata[] = $value->{'contacto'};
    $subdata[] = $value->{'Tlf1'};
    $subdata[] = $value->{'Tlf2'};
    $subdata[] = $value->{'Tlf3'};
    $subdata[] = $value->{'Email'};
    $subdata[] = $value->{'Direccion'};
    $subdata[] = $status;

    
    $datas[]=$subdata;
  }
  
  $json_data_auto=array(
    "data" =>  $datas
  );

  return json_encode($json_data_auto);


}

function GetCxp($sql){
  $curlHandler = curl_init();
  $data = array(
    'sql' => $sql
    
  );

  curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://oesvica.ddns.net:9011/slimframework_v3/getcxp',
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
    $subdata[] = isset($value->{'nombreproveedor'})?$value->{'nombreproveedor'}:'';
    $subdata[] = isset($value->{'nombre'})?$value->{'nombre'}:'';
    $subdata[] = isset($value->{'docasoc'})?$value->{'docasoc'}:'';
    $subdata[] = isset($value->{'fechadoc'})?$value->{'fechadoc'}->{'date'}:null;
    $subdata[] = isset($value->{'fechapago'})?$value->{'fechapago'}->{'date'}:null;
    $subdata[] = isset($value->{'total'})?number_format($value->{'total'},2,',','.'):'0';
    $subdata[] = isset($value->{'montoabonado'})?number_format($value->{'montoabonado'},2,',','.'):'0';
    $subdata[] = isset($value->{'saldoactual'})?number_format($value->{'saldoactual'},2,',','.'):'0';

    
    $datas[]=$subdata;
  }
  
  $json_data_auto=array(
    "data" =>  $datas
  );

  return json_encode($json_data_auto);


}





?>