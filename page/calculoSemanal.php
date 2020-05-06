<form class="form-horizontal form-group-sm" method="post">

           <div class="col-sm-3" id="cargos">
                <label for="control-label">Fecha De:</label>
                <div class="input-group">
      <input type="date" name="start_date" id="start_date" class="form-control"  placeholder="Intoducir el Fecha">
      <div class="input-group-addon">
        <span class="fa fa-calendar"></span>
      </div>
    </div>
                
                
              </div>
              
              <div class="col-sm-3" id="bonos">
                <label for="control-label">Fecha Hasta:</label>
                
                   <div class="input-group">
      <input type="date" name="end_date" id="end_date" class="form-control"  placeholder="Intoducir el Fecha">
      <div class="input-group-addon">
        <span class="fa fa-calendar"></span>
      </div>
    </div>    
    </div>

                  <div class="col-sm-3" id="bonos">
                <label for="control-label">Contrats</label>
                <select class="form-control" id="contrato" name="contrato" required>
                <option value="">Seleccione</option>
                <option value="01">Empleados</option>
                <option value="02">Empleado OPERACIONES</option>
                <option value="03">Directivos</option>
                <option value="04">Oficiales de Seguridad</option>
                <option value="05">Eventuales</option>
                <option value="06">Directiva</option>
                <option value="07">Empleado OPERACIONES (HP)</option>
                  
                </select>

              </div>

              <div class="col-sm-1" id="bonos">
                <label class="control-label">%</label>
                <input type="number"class="form-control " id="txtporc" name="txtporc" value="0" >
              </div>

              <button type="button" onclick="calculoSemana()" class="btn btn-primary btn-ms" name="calcular" id="calcular" >Calcular</button> 


               
</form>


<br>
<br>



<script type="text/javascript">
  



  function calculoSemana(){
var start = $('#start_date').val();
     var end = $('#end_date').val();
     var contrato = $('#contrato').val();
     var porc = $('#txtporc').val();
     console.log($('#start_date').val());
     console.log($('#end_date').val());
     console.log($('#contrato').val());

    let dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado","Domingo"];
let meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

      var x = $('#start_date').val();
      let date = new Date(x.replace(/-+/g, '/'));
      var mes_name = date.getMonth();
      var mes = meses[mes_name];
      var fechaNum = date.getDate();

      var x = $('#end_date').val();
      let date_end = new Date(x.replace(/-+/g, '/'));
      var mes_name_end = date_end.getMonth();
      var mes_end = meses[mes_name];
      var dia_end = date_end.getDate();


      actualizacion_ibarti_semanal(start,end,contrato,mes,dia_end,porc/100);

  }


</script>
