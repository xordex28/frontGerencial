 

<?php
 session_start(); 
 include('../arch/datatables.php');
 ?>   

  <br>
  <h4>Clientes</h4>
<div style="max-width: 80vw;overflow: auto;">
<table id="tbcliente" class="display responsive nowrap" cellspacing="0" >
        <thead>
            <tr>
                <th></th>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Tlf1</th>
                <th>Tlf2.</th>
                <th>Estado</th>
                <th>Ciudad</th>
                <th>Municipio</th>
                <th>Contacto</th>
                <th>Direccion</th>
                <th>Pais</th>
                <th>Zona</th>
                <th>Canal</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
    </table>

<script>
  

    $(document).ready(function(){
       table_cliente();

   });
    </script>


</div>  
