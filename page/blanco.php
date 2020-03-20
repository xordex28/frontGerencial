 

<?php
 session_start(); 
 include('../arch/datatables.php');
 ?>   
<div class="page-wrapper">
<div class="container-fluid">
  <br>
  <h4>Clientes</h4>
<div style="max-width: 80vw;overflow: auto;">
<table id="tbcliente" class="display compact" cellspacing="0" >
        <thead>
            <tr>
                <th></th>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Contacto</th>
                <th>tlf1</th>
                <th>tlf2.</th>
                <th>pais</th>
                <th>estado</th>
                <th>ciudad</th>
                <th>municipio</th>
                <th>direccion</th>
                <th>zona</th>
                <th>canal</th>
                <th>email</th>
                <th>status</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th></th>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Contacto</th>
                <th>tlf1</th>
                <th>tlf2.</th>
                <th>pais</th>
                <th>estado</th>
                <th>ciudad</th>
                <th>municipio</th>
                <th>direccion</th>
                <th>zona</th>
                <th>canal</th>
                <th>email</th>
                <th>status</th>
            </tr>
        </tfoot>


    </table>
    <div>
<script>
  

    $(document).ready(function(){
       table_cliente();

   });
    </script>

</div>  
</div>  