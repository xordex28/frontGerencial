function page(url) {
  $.ajax({
    type: "POST",
    url: url,
    success: function(response) {
      $("#div-results").html(response);
      $.ajax({
        type: "POST",
        data: { page: url },
        url: "arch/session.php",
        success: function(response) {
          ////.log(response);
        }
      });
      if (url == "page/inicio.php") {
        loadTopProductos();
        loadTopClientes();
        loadTopVendedores();
      }
    }
  });
}

function reload() {
  $.ajax({
    type: "POST",
    url: "arch/session.php",
    success: function(response) {
      page(response);
    }
  });
}

function table_cliente() {
  var dataTable = $('#tbcliente').removeAttr('width').DataTable( {
    ajax: {
      url: "module/table_cliente.php"
    },

    scrollY:        false,
    scrollX:        false,
    scrollCollapse: false,
    paging:         true,
    columnDefs: [
    { className: 'control',
    orderable: false, targets: 0 }


    ],
    fixedColumns: true
  });

}

function table_inventario(moneda,iva) {
 var dataTable = $('#tbinventory').removeAttr('width').DataTable( {
  ajax: {
    url: "module/table_inventory.php",
    type:"post",
    data:  {moneda:moneda,iva:iva}
  },
  

    scrollY:        false,
    scrollX:        false,
    scrollCollapse: false,
    paging:         true,
    columnDefs: [
    { className: 'control',
    orderable: false, targets: 0 }
    ],
    fixedColumns: true
  });
}

function table_cxc(moneda,fechaD,fechaH) {
 // testAjax('module/table_cxc.php','post',{moneda:moneda,fechaD:fechaD, fechaH:fechaH});

 var dataTable = $('#tbcxc').removeAttr('width').DataTable( {
  ajax: {
    url: "module/table_cxc.php",
    type:"post",
    data:  {moneda:moneda,fechaD:fechaD, fechaH:fechaH}
  },

    scrollY:        false,
    scrollX:        false,
    scrollCollapse: false,
    paging:         true,
    columnDefs: [
    { className: 'control',
    orderable: false, targets: 0}
    ],
    fixedColumns: true
  });
}

function table_cxp(moneda,fechaD,fechaH) {
 // testAjax('module/table_cxc.php','post',{moneda:moneda,fechaD:fechaD, fechaH:fechaH});

 var dataTable = $('#tbcxp').removeAttr('width').DataTable( {
  ajax: {
    url: "module/table_cxp.php",
    type:"post",
    data:  {moneda:moneda,fechaD:fechaD, fechaH:fechaH}
  },

    scrollY:        false,
    scrollX:        false,
    scrollCollapse: false,
    paging:         true,
    columnDefs: [
    { className: 'control',
    orderable: false, targets: 0}
    ],
    fixedColumns: true
  });
}

function table_proveedores() {
  var dataTable = $('#tbproveedores').removeAttr('width').DataTable( {
    ajax: {
      url: "module/table_proveedores.php"
    },
    responsive: {
      details: {
        type: "column",
        target: "tr"
      }
    },

    scrollY:        false,
    scrollX:        false,
    scrollCollapse: false,
    paging:         true,
    columnDefs: [
    { className: 'control',
    orderable: false, targets: 0 }
    ],
    fixedColumns: true
  });

}

function loadTopVendedores() {
  ////.log("h");
  let codA = $("#cod_Almacen").val();
  let fechaD = $("#fecDTopVendedor").val();
  let fechaH = $("#fecHTopVendedor").val();
  let topVendedor = $("#topVendedor").val();
  let moneda = $("#monedaTopVendedor").val();
  const data = {
    moneda: moneda,
    top: topVendedor,
    fechaD: fechaD,
    fechaH: fechaH,
    cod_almacen: codA
  };
  ////.log(data);
  buildGraphBar(
    "topCV",
    "views/topVendedores.php",
    data,
    "POST",
    "nombrevendedor",
    "ventas",
    "Top #" + data.top + " VENDEDORES CON MAS VENTAS EN " + data.moneda,
    true
    );
}

function loadTopClientes() {
  ////.log("h");
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
  ////.log(data);
  buildGraphBar(
    "topCC",
    "views/topClientes.php",
    data,
    "POST",
    "str_cliente_nombres",
    "ventas",
    "Top #" + data.top + " CLIENTES CON MAS COMPRAS EN " + data.moneda,
    true
    );
}

function loadTopProductos() {
  let codA = $("#cod_Almacen").val();
  let fechaD = $("#fecDTopProducto").val();
  let fechaH = $("#fecHTopProducto").val();
  let topProducto = $("#topProducto").val();
  let lineaTopProducto = $("#lineaTopProducto").val();
  let subLineaTopProducto = $("#subLineaTopProducto").val();
  const data = {
    top: topProducto,
    fechaD: fechaD,
    fechaH: fechaH,
    cod_almacen: codA,
    linea: lineaTopProducto,
    subLinea: subLineaTopProducto
  };
  buildGraphBar(
    "topPC",
    "views/topProductos.php",
    data,
    "POST",
    "descripcion",
    "VENDIDOS",
    "Top #" + data.top + " PRODUCTOS MAS VENDIDOS",
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
    $("#" + idContainer).html(
      '<div class="lds-load " style="display:flex;justify-content: space-between;" ><div></div><div></div><div></div></div>'
      );
    $.ajax({
      url: urlAjax,
      type: methodAjax,
      data: dataAjax,
      success: function(respuesta) {
        //.log(respuesta);
        $("#" + idContainer).html(`<canvas id="${idContainer}P"></canvas>`);
        const dataA = JSON.parse(respuesta);
        if (dataA["res"] && dataA["res"].length > 0) {
          const labels = dataA["res"].map(res => res[nameT]);
          const vals = dataA["res"].map(res => {
            return Number.parseFloat(res[nameV]);
          });
          const colors = dataA["res"].map(() => getRandomColor());
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
              tooltips: {
                callbacks: {
                  label: function(tooltipItem, data) {
                    if (dataAjax.moneda) {
                      if (parseInt(tooltipItem.xLabel) >= 1000) {
                        return (
                          dataAjax.moneda + " " +
                          tooltipItem.xLabel
                          .toString()
                          .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                          );
                      } else {
                        return dataAjax.moneda + tooltipItem.xLabel;
                      }
                    } else {
                      return tooltipItem.xLabel;
                    }
                  }
                }
              },
              scales: {
                xAxes: [
                {
                  display: horizontal,
                  ticks: {
                    beginAtZero: true,
                    callback: function(value, index, values) {
                      if (dataAjax.moneda) {
                        if (parseInt(value) >= 1000) {
                          return (
                            dataAjax.moneda +
                            value
                            .toString()
                            .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                            );
                        } else {
                          return dataAjax.moneda + value;
                        }
                      } else {
                        return value;
                      }
                    }
                  }
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
        } else {
          $("#" + idContainer).html(`<h5>${titulo} SIN DATA</h5>`);
        }
      },
      error: function() {
        $("#" + idContainer).html(`<canvas id="${idContainer}P"></canvas>`);
        ////.log("No se ha podido obtener la información");
      }
    });
  }
  return myChart;
}

function getSubLinea(linea) {
  ////.log(linea);
  $.ajax({
    type: "POST",
    url: "views/getSubLinea.php",
    data: { linea: linea },
    success: function(response) {
      ////.log(response);
      const data = JSON.parse(response);
      $("#subLineaTopProducto").html('<option value="">...</option>');
      data.forEach(sub => {
        $("#subLineaTopProducto").append(
          `<option value= "${sub["codigo"]}">${sub["descripcion"]}</option>`
          );
      });
    }
  });
}

function testAjax(url,metodo,data){
  $.ajax({
    type: metodo,
    url: url,
    data: data,
    success: function(response) {
      console.log(response);
      console.log(JSON.parse(response));
    }
  });
}