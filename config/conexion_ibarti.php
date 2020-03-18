<?php
	# conectare la base de datos
$conI=@mysqli_connect(DB_HOST_IBARTI, DB_USER_IBARTI, DB_PASS_IBARTI, DB_NAME_IBARTI);
if(!$conI){
    die("imposible conectarse: ".mysqli_error($conI));
}
if (@mysqli_connect_errno()) {
    die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}
?>
