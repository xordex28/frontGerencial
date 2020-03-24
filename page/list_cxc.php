
<?php
session_start(); 
include('../arch/datatables.php');
?>   
<div class="page-wrapper">
  <div class="container-fluid">
    <br>
    <h4>Clientes</h4>
    <div class="form-group" >
      <span>
       <label for="exampleFormControlSelect1">Fecha: </label>
       <input class=" form-control col-lg-2 col-md-4" type="date"  name="" id="fechaD">
     </span>
     <span style="margin-left:10px;">
      <label for="exampleFormControlSelect1">Hasta: </label>
      <input class=" form-control col-lg-2 col-md-4" type="date"  name="" id="fechaH">
    </span>
    <span style="margin-left:20px;">
     <label for="exampleFormControlSelect1">Moneda: </label>
     <select class="form-control col-lg-2 col-md-4" id="moneda" name="moneda" onchange="change()" required>
      <option value="0">BS</option>
      <option value="1">Usd</option>
    </select>
  </span>
  <span style="margin-left:20px;">

   <button type="button" onclick="change()" class="btn btn-primary btn-ms" name="change" id="change" >Calcular</button> 
 </span>
</div>
<table id="tbinventory" class="display compact" cellspacing="0" >
  <thead> nombres,nombre,iddoc,fechaemision,fechavencimiento,montooriginal,montoabonado,saldoactual
    <tr>
      <th></th>
      <th>nombres</th>
      <th>nombre</th>
      <th>iddoc</th>
      <th>fechaemision</th>
      <th>fechavencimiento.</th>
      <th>montooriginal</th>
      <th>montoabonado</th>
      <th>saldoactual</th>

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