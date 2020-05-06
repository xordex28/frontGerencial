function actualizar(id, descripcion) {
	$.ajax({
		data: { id: id, descripcion: descripcion },
		url: 'arch/check.php',
		type: 'post',
		success: function (response) {
			$(document).ready(function () {
				reload();
				$("#almacenSelect").html('Almacen: ' + descripcion);
				document.location = "";
			});

		},
		error: function (xhr, ajaxOptions, thrownError) {
			console.log(thrownError);
		}
	});
	/*	
	*/
}
