
<?php
session_start(); 
include('../arch/kpi.php');

?>   

<br>
<h4>Despachos</h4>
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
 <label for="exampleFormControlSelect1">Tipo: </label>
 <select class="form-control col-lg-2 col-md-4" id="tipo" name="tipo" onchange="change()" required>
  <option value="0">Facturas</option>
  <option value="1">Notas de entregas</option>
</select>
</span>
<span style="margin-left:20px;">

  <input type="checkbox" id="check" name="check" class="chk-col-red" onchange="change()" />
  <label for="check">Anulados</label>
</span>

<span style="margin-left:20px;">

   <button type="button" onclick="change()" class="btn btn-primary btn-ms" name="change" id="change" >Listar</button> 
 </span>

</div>
<div style="max-width: 100vw;overflow: auto;">
  <table id="tbdesp" class="display responsive nowrap" cellspacing="0" >
    <thead>
      <tr>
        <th></th>
        <th>Numero</th>
        <th>Fecha</th>
        <th>Nombre</th>
        <th>Transporte</th>
        <th>Guia.</th>
        <th>Despacho</th>
        <th>Status</th>
        <th>Observacion</th>


      </tr>
    </thead>
  </table>
  <script>


    $(document).ready(function(){
      var tipo = $('#tipo').val();
      var check = document.getElementById('check').checked;
      var fechaD = String($('#fechaD').val()).replace(/-/g,'');
      var fechaH = String($('#fechaH').val()).replace(/-/g,'');
    console.log(tipo, fechaD, fechaH, check);

   $('#tbdesp').DataTable().destroy();
    table_desp(tipo, fechaD, fechaH, check);
  });

    function change(){
      var tipo = $('#tipo').val();
      var check = document.getElementById('check').checked;
      var fechaD = String($('#fechaD').val()).replace(/-/g,'');
      var fechaH = String($('#fechaH').val()).replace(/-/g,'');
      console.log(tipo, fechaD, fechaH, check);
     $('#tbdesp').DataTable().destroy();
     table_desp(tipo, fechaD, fechaH, check);
   }
 </script>


</div>  

