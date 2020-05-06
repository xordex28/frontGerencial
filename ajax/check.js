function actualizar(id){

	$.ajax({
		data:  {id:id},
		url:   'arch/check.php',
		type:  'post',
		success:  function (response) {
				console.log(response);
			  $(document).ready(function(){
    			page("page/inicio.php");

  			});

		},
		error: function (xhr, ajaxOptions, thrownError) {
			console.log(thrownError);
		}
	});
	/*	
	*/
}
