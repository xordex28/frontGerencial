
<?php
 session_start(); 
 include('../arch/datatables.php');
 ?>   

  <br>
  <h4>Proveedores</h4>
<div style="max-width: 80vw;overflow: auto;">
<table id="tbproveedores" class="display responsive nowrap" cellspacing="0" >
        <thead>
            <tr>
                <th></th>
                <th>Rif</th>
                <th>RazonSocial</th>
                <th>Contacto</th>
                <th>Tlf1.</th>
                <th>Tlf2</th>
                <th>Tlf3</th>
                <th>Direccion</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
    </table>
  
<script>
  

    $(document).ready(function(){
       table_proveedores();

   });
    </script>


</div>  
