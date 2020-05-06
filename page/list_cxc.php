
<?php
session_start(); 
include('../arch/datatables.php');
include('../arch/kpi.php');

?>   

    <br>
    <h4>Cuentas Por Cobrar</h4>
    <div class="form-group" >
      <span>
       <label for="exampleFormControlSelect1">Fecha: </label>
       <input class=" form-control col-lg-2 col-md-4" type="date" value="<?php echo _data_first_month_day(); ?>"  name="" id="fechaD" required>
     </span>
     <span style="margin-left:10px;">
      <label for="exampleFormControlSelect1">Hasta: </label>
      <input class=" form-control col-lg-2 col-md-4" type="date" value="<?php echo _data_last_month_day(); ?>" name="" id="fechaH" required>
    </span>
    <span style="margin-left:10px;">
     <label for="exampleFormControlSelect1">Moneda: </label>
     <select class="form-control col-lg-1 col-md-2" id="moneda" name="moneda" onchange="change()" required>
      <option value="0">BS</option>
      <option value="1">Usd</option>
    </select>
  </span>
  <span style="margin-left:10px;">
     <label for="exampleFormControlSelect1">Pendiente: </label>
     <select class="form-control col-lg-2 col-md-2" id="pendiente" name="pendiente" onchange="change()" required>
      <option value="0">TODAS</option>
      <option value="1">PAGADAS</option>
      <option value="2">PENDIENTES</option>
      <option value="3">VENCIDAS</option>
      <option value="4">POR VENCER</option>
    </select>
  </span>
  <span style="margin-left:20px;">

<button type="button" onclick="change()" class="btn btn-primary btn-ms" name="change" id="change" >Listar</button> 
</span>
</div>
<div style="max-width: 100vw;overflow: auto;">
<table id="tbcxc" class="display responsive nowrap" cellspacing="0" >
  <thead>
    <tr>
      <th></th>
      <th>Descripcion</th>
      <th>Tipo</th>
      <th>Iddoc</th>
      <th>Emision</th>
      <th>Vencimiento</th>
      <th>Original</th>
      <th>Abonado</th>
      <th>Saldo</th>

    </tr>
  </thead>
</table>
<script>


  $(document).ready(function(){
    var moneda = $('#moneda').val();
    var pendiente = $('#pendiente').val();
    var fechaD = String($('#fechaD').val()).replace(/-/g,'');
    var fechaH = String($('#fechaH').val()).replace(/-/g,'');
    //console.log(moneda, fechaD, fechaH,pendiente);

    $('#tbcxc').DataTable().destroy();
    table_cxc(moneda,fechaD,fechaH,pendiente);

  });

  function change(){
   var moneda = $('#moneda').val();
   var pendiente = $('#pendiente').val();
    var fechaD = String($('#fechaD').val()).replace(/-/g,'');
    var fechaH = String($('#fechaH').val()).replace(/-/g,'');
   $('#tbcxc').DataTable().destroy();
   table_cxc(moneda,fechaD,fechaH,pendiente);
 }
</script>


</div>  

