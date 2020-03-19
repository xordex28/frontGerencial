 

<?php
 session_start(); 
 include('../arch/datatables.php');
 ?>   
<div class="page-wrapper">
<div class="container-fluid">
  <br>
  <h4>Asignacion</h4>

<table id="tbcliente" class="display compact" cellspacing="0" >
        <thead>
            <tr>
                <th width="1%"></th>
                <th width="5%">Cedula</th>
                <th width="5%">Nombre</th>
                <th width="5%">Contacto</th>
                <th width="5%">tlf1</th>
                <th width="5%">tlf2.</th>
                <th width="5%">pais</th>
                <th width="5%">estado</th>
                <th width="5%">ciudad</th>
                <th width="5%">municipio</th>
                <th width="5%">direccion</th>
                <th width="5%">zona</th>
                <th width="5%">canal</th>
                <th width="5%">email</th>
                <th width="5%">status</th>
            </tr>
        </thead>


    </table>
<script>
  

    $(document).ready(function(){
       table_cliente();

   });
    </script>

</div>  
</div>  