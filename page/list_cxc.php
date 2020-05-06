
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
    <span style="margin-left:20px;">
     <label for="exampleFormControlSelect1">Moneda: </label>
     <select class="form-control col-lg-2 col-md-4" id="moneda" name="moneda" onchange="change()" required>
      <option value="0">BS</option>
      <option value="1">Usd</option>
    </select>
  </span>
<!--   <span style="margin-left:20px;">

   <button type="button" onclick="change()" class="btn btn-primary btn-ms" name="change" id="change" >Listar</button> 
 </span> -->
</div>
<div style="max-width: 100vw;overflow: auto;">
<table id="tbcxc" class="display responsive nowrap" cellspacing="0" >
  <thead>
    <tr>
      <th></th>
      <th>Nombres</th>
      <th>Nombre</th>
      <th>Iddoc</th>
      <th>Fechaemision</th>
      <th>Fechavencimiento.</th>
      <th>Montooriginal</th>
      <th>Montoabonado</th>
      <th>Saldoactual</th>

    </tr>
  </thead>
</table>
<script>


  $(document).ready(function(){
    var moneda = $('#moneda').val();
    var fechaD = String($('#fechaD').val()).replace(/-/g,'');
    var fechaH = String($('#fechaH').val()).replace(/-/g,'');
    //console.log(moneda, fechaD, fechaH);

    $('#tbcxc').DataTable().destroy();
    table_cxc(moneda,fechaD,fechaH);

  });

  function change(){
   var moneda = $('#moneda').val();
    var fechaD = String($('#fechaD').val()).replace(/-/g,'');
    var fechaH = String($('#fechaH').val()).replace(/-/g,'');
   $('#tbcxc').DataTable().destroy();
   table_cxc(moneda,fechaD,fechaH);
 }
</script>


</div>  

