function page(url) {
    $.ajax({
        type: "POST",
        url: url,
        success: function (response) {
            $('#div-results').html(response);
        }
    });
};


function table_cliente() {
    var dataTable = $('#tbcliente').DataTable({
        "retrieve": true,
        "processing": false,
        "serverSide": true,
        "ajax": {
            url: "tabl_cliente.php",
            type: "post"
        }
    });
};
function table_concepto(tipo) {
    var dataTable = $('#tbconcepto').DataTable({
        "retrieve": true,
        "processing": false,
        "serverSide": true,
        "ajax": {

            url: "tabl_concepto.php",
            type: "post",
            data: { tipo: tipo }


        }
    });
};
function recargar_table_auto() {
    var oTable = $('#tbcliente').DataTable();
    oTable.ajax.reload();
};

function table_ubic(txtubic = '', txtcod = '') {
    console.log('txtubic ' + txtubic)
    console.log('txtcod ' + txtcod)
    var dataTable = $('#tb').DataTable({
        "retrieve": true,
        "processing": false,
        "serverSide": true,
        "scrollY": "300px",
        "scrollCollapse": true,



        "ajax": {
            url: "tabl_ubic.php",
            type: "post",
            data: {
                txtubic: txtubic, txtcod: txtcod
            }
        }
    });
};
function recargar_table_ubic() {
    var oTable = $('#tb').DataTable();
    oTable.ajax.reload();
};
function nueva_asig(cliente, ubicacion, cargo, bono, valor) {

    $.ajax({
        url: 'arch/nueva_asig.php',
        type: 'POST',
        data: { cliente: cliente, ubicacion: ubicacion, cargo: cargo, bono: bono, valor: valor },
        success: function (data) {
            console.log(data);
            if (data.trim() == 'correcto') {
                toastr.success('Se Guardo Correctamente', 'Exitoso', { positionClass: 'toast-top-right', timeOut: 1200, preventDuplicates: true });
                //$("#guardar_vehiculo")[0].reset();
            }

            if (data.trim() == 'error') {
                toastr.error('No se Guardo correctamente', 'Error', { positionClass: 'toast-top-right', timeOut: 2500, preventDuplicates: true });
            }

            if (data.trim() == 'existe') {
                toastr.error('Ya existe el bono', 'Error', { positionClass: 'toast-top-right', timeOut: 2500, preventDuplicates: true });
            }
            // console.log(x);
            //recargar_table_auto();
        },
        error: function (xhr, ajaOptions, thrownError) {
            console.log(thrownError);
            toastr.error('Paso un Problema en el servidor contactar con Dtto Desarrollo', 'Error', { positionClass: 'toast-top-right', timeOut: 2500, preventDuplicates: true });
        }
    });

};

function update_asig(id, valor) {

    $.ajax({
        url: 'arch/update_asig.php',
        type: 'POST',
        data: { id: id, valor: valor },
        success: function (data) {
            console.log(data);
            if (data.trim() == 'correcto') {
                toastr.success('Se Guardo Correctamente', 'Exitoso', { positionClass: 'toast-top-right', timeOut: 1200, preventDuplicates: true });
                //$("#guardar_vehiculo")[0].reset();
            }

            if (data.trim() == 'error') {
                toastr.error('No se Guardo correctamente', 'Error', { positionClass: 'toast-top-right', timeOut: 2500, preventDuplicates: true });
            }

        },
        error: function (xhr, ajaOptions, thrownError) {
            console.log(thrownError);
            toastr.error('Paso un Problema en el servidor contactar con Dtto Desarrollo', 'Error', { positionClass: 'toast-top-right', timeOut: 2500, preventDuplicates: true });
        }
    });

};

function actualizacion_ibarti(start, end, contrato, mes, dia_end) {

    $.ajax({
        url: 'arch/update_ibarti.php',
        type: 'POST',
        data: { start: start, end: end, contrato: contrato, mes: mes, dia_end: dia_end },
        beforeSend: function () {
            toastr.warning('Se esta Generando el TXT, Por Favor espere');
        },
        success: function (data) {
            console.log(data);
            if (data.trim() == 'correcto') {
                console.log(data);
                toastr.success('Se Genero el TXT correctamente', 'Exitoso', { positionClass: 'toast-top-right', timeOut: 902500, preventDuplicates: true });
                //$("#guardar_vehiculo")[0].reset();
            } else {
                toastr.error('Paso un Problema en el servidor, intente nuevamente de persistir el error, contactar con Dtto Desarrollo', 'Error', { positionClass: 'toast-top-right', timeOut: 2500, preventDuplicates: true });
            }

        },
        error: function (xhr, ajaOptions, thrownError) {
            console.log(thrownError);
            toastr.error('Paso un Problema en el servidor contactar con Dtto Desarrollo', 'Error', { positionClass: 'toast-top-right', timeOut: 2500, preventDuplicates: true });
        }
    });

};

function actualizacion_ibarti_semanal(start, end, contrato, mes, dia_end, porc) {

    $.ajax({
        url: 'arch/snem_var.php',
        type: 'POST',
        data: { start: start, end: end, contrato: contrato, mes: mes, dia_end: dia_end, porc },
        beforeSend: function () {
            toastr.warning('Se esta Generando el TXT, Por Favor espere');
        },
        success: function (data) {
            console.log(data);
            if (data.trim() == 'correcto') {
                console.log(data);
                toastr.success('Se Genero el TXT correctamente', 'Exitoso', { positionClass: 'toast-top-right', timeOut: 902500, preventDuplicates: true });
                //$("#guardar_vehiculo")[0].reset();
            } else {
                toastr.error('Paso un Problema en el servidor, intente nuevamente de persistir el error, contactar con Dtto Desarrollo', 'Error', { positionClass: 'toast-top-right', timeOut: 2500, preventDuplicates: true });
            }

        },
        error: function (xhr, ajaOptions, thrownError) {
            console.log(thrownError);
            toastr.error('Paso un Problema en el servidor contactar con Dtto Desarrollo', 'Error', { positionClass: 'toast-top-right', timeOut: 2500, preventDuplicates: true });
        }
    });

};

function reporte_asignacion() {

    $.ajax({
        url: 'reportes/reporte_asignacion.php',

        success: function (data) {
            console.log(data);
            if (data.trim() == 'correcto') {
                console.log(data);
                toastr.success('Se Genero el TXT correctamente', 'Exitoso', { positionClass: 'toast-top-right', timeOut: 902500, preventDuplicates: true });
                //$("#guardar_vehiculo")[0].reset();

            } else {
                toastr.error('Paso un Problema en el servidor, intente nuevamente de persistir el error, contactar con Dtto Desarrollo', 'Error', { positionClass: 'toast-top-right', timeOut: 2500, preventDuplicates: true });
            }

        },
        error: function (data, xhr, ajaOptions, thrownError) {
            console.log(thrownError);
            console.log(data);
            toastr.error('Paso un Problema en el servidor contactar con Dtto Desarrollo', 'Error', { positionClass: 'toast-top-right', timeOut: 2500, preventDuplicates: true });
        }
    });

};

function loadData(top, fD, fH) {
    let codA = $('#cod_Almacen').val();
    $.ajax({
        url: 'views/topProductos.php',
        type: "POST",
        data: {
            top: top,
            fechaD: fD,
            fechaH: fH,
            cod_almacen: codA
        },
        success: function (respuesta) {
            console.log(JSON.parse(respuesta));
        },
        error: function () {
            console.log("No se ha podido obtener la información");
        }
    });
}

