function page(url) {
  $.ajax({
    type: "POST",
    url: url,
    success: function (response) {
      $("#div-results").html(response);
      $.ajax({
        type: "POST",
        data: { page: url},
        url: "arch/session.php",
        success: function (response) {
          console.log(response);
        }
      });
      if (url == "page/inicio.php") {
        loadTopProductos();
      }
    }
  });
}

function reload() {
  $.ajax({
    type: "POST",
    url: "arch/session.php",
    success: function (response) {
      page(response);
    }
  });
}

function table_cliente() {

  $(document).ready(function() {
    var dataTable = $('#tbcliente').removeAttr('width').DataTable( {
    ajax: {
      url: "module/table_cliente.php"
    },
    responsive: {
      details: {
        type: "column",
        target: "tr"
      }
    },

        scrollY:        false,
        scrollX:        false,
        scrollCollapse: true,
        paging:         true,
                columnDefs: [
            { className: 'control',
            orderable: false, targets: 0 },
            { width: 100, targets: 1 },
             { width: 300, targets: 2 }


        ],
        fixedColumns: true
  });
   
});

}

function table_inventario() {

  $(document).ready(function() {
    var dataTable = $('#tbinventory').removeAttr('width').DataTable( {
    ajax: {
      url: "module/table_inventory.php",
      type:"post",
      data:  {}
    },
    responsive: {
      details: {
        type: "column",
        target: "tr"
      }
    },

        scrollY:        false,
        scrollX:        false,
        scrollCollapse: true,
        paging:         true,
                columnDefs: [
            { className: 'control',
            orderable: false, targets: 0 },
            { width: 100, targets: 1 },
             { width: 300, targets: 2 }


        ],
        fixedColumns: true
  });
   
} );

}

function loadTopClientes() {
  console.log("h");
  let codA = $("#cod_Almacen").val();
  let fechaD = $("#fecDTopCliente").val();
  let fechaH = $("#fecHTopCliente").val();
  let topCliente = $("#topCliente").val();
  let zona = $("#zonaTopCliente").val();
  let canal = $("#canalTopCliente").val();
  let moneda = $("#monedaTopCliente").val();
  const data = {
    moneda: moneda,
    top: topCliente,
    fechaD: fechaD,
    fechaH: fechaH,
    cod_almacen: codA,
    zona: zona,
    canal: canal
  };
  console.log(data);
  buildGraphBar(
    "topCC",
    "views/topClientes.php",
    data,
    "POST",
    "str_cliente_nombres",
    "ventas",
    "Top #" + data.top + " Venta Cliente",
    true
  );
}

function loadTopProductos() {
  console.log("h");
  let codA = $("#cod_Almacen").val();
  let fechaD = $("#fecDTopProducto").val();
  let fechaH = $("#fecHTopProducto").val();
  let topProducto = $("#topProducto").val();
  const data = {
    top: topProducto,
    fechaD: fechaD,
    fechaH: fechaH,
    cod_almacen: codA
  };
  buildGraphBar(
    "topPC",
    "views/topProductos.php",
    data,
    "POST",
    "descripcion",
    "VENDIDOS",
    "Top #" + data.top + " Productos Vendidos",
    true
  );
}

function getRandomColor() {
  var letters = "0123456789ABCDEF";
  var color = "#";
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

function buildGraphBar(
  idContainer,
  urlAjax,
  dataAjax,
  methodAjax,
  nameT,
  nameV,
  titulo,
  horizontal
) {
  var myChart;
  if (urlAjax && idContainer && dataAjax && nameT && nameV) {
    $.ajax({
      url: urlAjax,
      type: methodAjax,
      data: dataAjax,
      success: function(respuesta) {
        console.log(respuesta);
        const dataA = JSON.parse(respuesta);
        if (dataA["res"] && dataA["res"].length > 0) {
          const labels = dataA["res"].map(res => res[nameT]);
          const vals = dataA["res"].map(res => Number(res[nameV]));
          const colors = dataA["res"].map(() => getRandomColor());
          $("#" + idContainer).html(`<canvas id="${idContainer}P"></canvas>`);
          var ctx = document.getElementById(`${idContainer}P`).getContext("2d");
          myChart = new Chart(ctx, {
            type: !horizontal ? "bar" : "horizontalBar",
            data: {
              labels: labels,
              datasets: [
                {
                  label: titulo,
                  data: vals,
                  backgroundColor: colors,
                  borderWidth: 1
                }
              ]
            },
            options: {
              scales: {
                xAxes: [
                  {
                    display: horizontal
                  }
                ],
                yAxes: [
                  {
                    ticks: {
                      beginAtZero: true
                    }
                  }
                ]
              }
            }
          });
        }
      },
      error: function() {
        console.log("No se ha podido obtener la información");
      }
    });
  }
  return myChart;
}
