
<?php
 session_start(); 
 include('../arch/datatables.php');
 ?>   
<div class="page-wrapper">
<div class="container-fluid">
  <br>
  <h4>Clientes</h4>
<div style="max-width: 80vw;overflow: auto;">
<table id="tbinventory" class="display compact" cellspacing="0" >
        <thead>
            <tr>
                <th></th>
                <th>Codigo</th>
                <th>Item</th>
                <th>presentacion</th>
                <th>Precio_A</th>
                <th>Precio_B.</th>
                <th>Precio_C</th>
                <th>Precio_D</th>
                <th>existencia</th>
           
            </tr>
        </thead>
    </table>
    <div>
<script>
  

    $(document).ready(function(){
       table_inventario();

   });
    </script>

</div>  
</div>  