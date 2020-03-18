<?php
session_start();
if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
  header("location: login.php");
  exit;
}
?>


    <div class="content">
      <h4>Conceptos</h4>
      <?php
      $tipo = $_SESSION['tipo'];
      //echo "string".$tipo;
      ?>

      <table id="tbconcepto" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Descripcion</th>
                <th>Valor</th>
                

                <?php

                /* Connect To Database*/
    require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
    require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos


    $sql="SELECT * FROM tb_bono";
    $desc_bono='';
    $run_sql=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($run_sql)){
      

        $cod_bono=$row[0];
        $nom_bono=$row[1];
        echo'<th>'.$nom_bono.'</th>';

    }//end while



    ?>                
</tr>
</thead>

</table>

<!--create modal dialog for display detail info for edit on button cell click-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div id="content-data"></div>
    </div>
</div>
</div>



<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div id="content-data"></div>
    </div>
</div>


<?php

echo '<script>



    $(document).ready(function(){
     table_concepto('.$tipo .');
     
 });



    </script>';
    ?>