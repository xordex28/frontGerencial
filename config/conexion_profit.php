<?php
$serverName = DB_HOST_PROFIT; //serverName\instanceName
$connectionInfo = array( "Database"=>DB_NAME_PROFIT, "UID"=>DB_USER_PROFIT, "PWD"=>DB_PASS_PROFIT);
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
    
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>