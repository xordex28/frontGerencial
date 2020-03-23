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

  $.ajax({
    url: "views/topProductos.php",
    type: "POST",
    data: data,
    success: function (respuesta) {
      console.log(respuesta);
      const dataA = JSON.parse(respuesta);
      if (dataA) {
        const labels = dataA.map(res => res.descripcion);
        const vals = dataA.map(res => Number(res.VENDIDOS));
        const colors = dataA.map(() => getRandomColor());
        $("#topPC").html('<canvas id="topP"></canvas>');
        var ctx = document.getElementById("topP").getContext("2d");
        console.log(colors);
        var myChart = new Chart(ctx, {
          type: "horizontalBar",
          data: {
            labels: labels,
            datasets: [
              {
                label: "Top #" + data.top + " Productos Vendidos",
                data: vals,
                backgroundColor: colors,
                borderWidth: 1
              }
            ]
          },
          options: {
            scales: {
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
    error: function () {
      console.log("No se ha podido obtener la información");
    }
  });
  // $('#configTP').hide();
}

function getRandomColor() {
  var letters = "0123456789ABCDEF";
  var color = "#";
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}
