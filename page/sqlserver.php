<?php
 require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
  require_once ("../config/conexion.php");
 require_once ("../config/conexion_ibarti.php");
 require_once ("../config/conexion_profit.php");

 if(isset($conI)){

#################################### Actualizacion Ficha #######################################
 	$sqlD ="DELETE from ibarti_mysql";  
 	$sqlA ="ALTER TABLE ibarti_mysql AUTO_INCREMENT=1";  
 	$query=mysqli_query($con,$sqlD);
 	$query=mysqli_query($con,$sqlA);
 	$sql ="SELECT cod_ficha,nombres,apellidos,cedula,cod_ficha_status FROM ficha ";   
 	$query=mysqli_query($conI,$sql);
 	$sqlC = "";
 	$i=0;
 	while($row=mysqli_fetch_array($query)){
 		

 		if($i==0){
 			$sqlC.= "INSERT INTO ibarti_mysql (ficha, nombres, apellidos, cedula, status) VALUES ('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]')";
 		}else{
 			$sqlC.= ",('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]')";
 		}
 		$i++;
 	}
 	$sqlU= "SELECT caracter_especial_ibarti_mysql()";
 	$query_new_insert = mysqli_query($con,$sqlC);

 	$query_new_update = mysqli_query($con,$sqlU);
 }
 else{
 	echo "no conecto ibarti";
 }



if(isset($conn)){
$sqlD ="DELETE from profit_sqlserver";  
 	$sqlA ="ALTER TABLE profit_sqlserver AUTO_INCREMENT=1";  
 	$query=mysqli_query($con,$sqlD);
 	$query=mysqli_query($con,$sqlA);
  $sqlf = "SELECT cod_emp,nombres,apellidos,ci,status FROM snemple";
    $query=sqlsrv_query($conn,$sqlf);
    $sqlC = "";
    $i1=0;
    while($row=sqlsrv_fetch_array($query)){
       #echo "codigo:".$row[0]." nombres:".$row[1]." apellidos:".$row[2]." cedula:".$row[3]." status:".$row[4];
    	#echo "<br>";

    	if($i1==0){
 			$sqlC.= "INSERT INTO profit_sqlserver (ficha, nombres, apellidos, cedula, status) VALUES ('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]')";
 		}else{
 			$sqlC.= ",('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]')";
 		}
 		$i1++;
}

	$sqlU= "SELECT caracter_especial_profit_sqlserver()";
 	$query_new_insert = mysqli_query($con,$sqlC);

 	$query_new_update = mysqli_query($con,$sqlU);

}


 ?>