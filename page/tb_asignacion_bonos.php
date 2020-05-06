 
<div class="content">
  <h4>Asignacion</h4>

 
  <table id="tbcliente" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Cliente</th>
            <th>Action</th>
        </tr>
    </thead>

</table>

<!--create modal dialog for display detail info for edit on button cell click-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div id="content-data"></div>
    </div>
</div>
</div>



<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div id="content-data"></div>
    </div>
</div>




<script>



    $(document).ready(function(){
       table_cliente();

   });

    $(document).on('click','#getCliente',function(e){
        e.preventDefault();
        var per_id=$(this).data('id');
        console.log(per_id);
            //alert(per_id);
            $('#content-data').html('');
            $.ajax({
                url:'./modal/editar_auto.php',
                type:'POST',
                data:'id='+per_id,
                dataType:'html',
                success: function(data){
                    $('#content-data').html('');
                    $('#content-data').html(data);
                },
                error: function(xhr,ajaOptions, thrownError){
                    $('#content-data').html('<p>Error</p>'+thrownError);
                }
            });
            
        });

        function abrirEnPestana(url) 
    {
        console.log(url);
    var a = document.createElement("a");
    a.target = "_blank";
    a.href = url;
    a.click();
    };

    </script>

