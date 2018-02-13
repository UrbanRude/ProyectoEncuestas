$('#formLogin').submit(function(e){
		e.preventDefault();
		var usuarioIngreso = $('#loginUser').val();
		var passwordIngreso = $('#passUserLogin').val();
		if (!usuarioIngreso == '' && !passwordIngreso=='') {
			var parametros = {"p1":usuarioIngreso,"p2":passwordIngreso};
			$.ajax({
					url:'Controllers/usuarioController.php?action=1',
					type:'POST',
					data:parametros,
					success:function(respuesta){
						switch(respuesta){
							case '1':
								alert('Welcome');
							break;
							case '2':
								swal("Opss !", "Usuarios y/o password incorrecto", "error");
							break;
						}
					},
					error:function(respuesta){
						console.log("4");
					}
				});
		}else{
			alert("Debes de llenar los campos");
		}
	});
$('#fromRegistre').submit(function(e){
	e.preventDefault();
	console.log("1");
	$.ajax({
		url:'Controllers/usuarioController.php?action=2',
		type:'POST',
		data:$('#fromRegistre').serialize(),
		success:function(respuesta){
			if (respuesta) {
				swal("Bienvenido","Registro exitoso","success");
			}else{
				swal("Opss !", "Ocurrio un error al registrarse", "error");
			}
		},
		error:function(respuesta){
			console.log('Error');
		}
	});
	console.log("2");
});
$('#emailUser').change(function(e){
	e.preventDefault();
	var parametros = {"p1":$('#emailUser').val()};
	$.ajax({
		url:'Controllers/usuarioController.php?action=3',
		type:'POST',
		data:parametros,
		success:function(respuesta){
			console.log(respuesta);
		},	
		error:function(respuesta){
			console.log("Error");
		}
	});
});