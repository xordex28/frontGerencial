 function page(url){
    $.ajax({
        type: "POST",
        url: url,
        success: function(response) {
               
                $('#div-results').html(response);
            }
        });
};


function table_cliente(){
    var dataTable=$('#tbcliente').DataTable({
        "ajax":{
            url:"module/table_cliente.php"
        },
            /*    initComplete: function (i,j) {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );*/
        //},
        responsive: {
            details: {
                type: 'column',
                target: 'tr'
            }
        },
        columnDefs: [ {
            className: 'control',
            orderable: false,
            targets:   0
        } ],
        order: [ 2, 'des' ],
     

    });
/*
    $("#tbcliente tfoot th").each( function ( i ) {
        var select = $('<select><option value=""></option></select>')
            .appendTo( $(this).empty() )
            .on( 'change', function () {
                table.column( i )
                    .search( $(this).val() )
                    .draw();
            } );
 
        table.column( i ).data().unique().sort().each( function ( d, j ) {
            select.append( '<option value="'+d+'">'+d+'</option>' )
        } );
    });

    $("#tbcliente tfoot th").each( function ( i ) {
        var select = $('<select><option value=""></option></select>')
            .appendTo( $(this).empty() )
            .on( 'change', function () {
                table.column( i )
                    .search( $(this).val() )
                    .draw();
            } );
 
        table.column( i ).data().unique().sort().each( function ( d, j ) {
            select.append( '<option value="'+d+'">'+d+'</option>' )
        } );
    });*/


};

function loadTopProductos() {
  let codA = $("#cod_Almacen").val();
  let fechaD = $("#fecDTopProducto").val();
  let fechaH = $("#fecHTopProducto").val();
  let topProducto = $('#topProducto').val();
  const data = {
    top: topProducto,
    fechaD: fechaD,
    fechaH: fechaH,
    cod_almacen: codA
  }
  console.log(data);
  if (codA) {
    $.ajax({
      url: "views/topProductos.php",
      type: "POST",
      data: data,
      success: function(respuesta) {
          console.log(respuesta);
        const data = JSON.parse(respuesta);
        let labels = data.map(res => res.coditems);
        let vals = data.map(res => Number(res.VENDIDOS));
        new Chartist.Pie(
          "#topP",
          {
            // labels: labels,
            series: [vals]
          },
          {
            axisX: {
              // On the x-axis start means top and end means bottom
              position: 'end',
              showGrid: false
            },
            axisY: {
              // On the y-axis start means left and end means right
              position: 'start'
            },
          high:'12',
          low: '0',
          plugins: [
              Chartist.plugins.tooltip()
          ]
      }
        );
      },
      error: function() {
        console.log("No se ha podido obtener la información");
      }
    });
  }
};



