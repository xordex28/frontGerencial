function actualizar(id, descripcion) {
	$.ajax({
		data: { id: id, descripcion: descripcion },
		url: 'arch/check.php',
		type: 'post',
		success: function (response) {
			$(document).ready(function () {
				page("page/inicio.php");
				$("#almacenSelect").html('Almacen: ' + descripcion);
			});

		},
		error: function (xhr, ajaxOptions, thrownError) {
			console.log(thrownError);
		}
	});
	/*	
	*/
}
