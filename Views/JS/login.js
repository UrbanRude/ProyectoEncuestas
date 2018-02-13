	$('#formLogin').submit(function(e){
			e.preventDefault();
			var usuarioIngreso = $('#loginUser').val();
			var passwordIngreso = $('#passUserLogin').val();
			if (!usuarioIngreso == '' && !passwordIngreso=='') {
				var parametros = {"p1":usuarioIngreso,"p2":passwordIngreso};
				$.ajax({
						url:'Controllers/usuarioController.php',
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