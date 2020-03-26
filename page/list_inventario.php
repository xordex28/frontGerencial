
<?php
session_start(); 
include('../arch/datatables.php');
?>   
<div class="page-wrapper">
    <div class="container-fluid">
      <br>
      <h4>Ineventario</h4>
      
         <div class="form-group" >
            <span>
             <label for="exampleFormControlSelect1">Moneda: </label>
             <select class="form-control col-lg-3 col-md-6" id="moneda" name="moneda" onchange="change()" required>
              <option value="0">BS</option>
              <option value="1">$</option>
          </select>
      </span>
      <span style="margin-left:40px;">
          <label for="exampleFormControlSelect1">Iva: </label>
          <select class="form-control col-lg-3 col-md-6" id="iva"  name="iva" onchange="change()" required>
              <option value="0">Iva</option>
              <option value="1">Sin Iva</option>
          </select>
      </span>
  </div>
  <div style="max-width: 80vw;overflow: auto;">
  <table id="tbinventory" class="display responsive nowrap" cellspacing="0" >
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

    <script>


        $(document).ready(function(){
            var moneda = $('#moneda').val();
            var iva = $('#iva').val();
            $('#tbinventory').DataTable().destroy();
            table_inventario(moneda,iva);

        });

         function change(){
             var moneda = $('#moneda').val();
            var iva = $('#iva').val();
             $('#tbinventory').DataTable().destroy();
            table_inventario(moneda,iva);
         }
    </script>
 
</div>  
</div>  
</div>  