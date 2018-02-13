<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<header>
		<div>
			<form id="formLogin">
				<label for="loginUser">Usuario:</label>
				<input type="text" id="loginUser" name="loginUser" placeholder="Ingresa">
				<label for="passUserLogin">Password</label>
				<input type="password" id="passUserLogin" name="passUserLogin" placeholder="Ingresa tu password">
				<button type="submit">Ingresar</button>
			</form>
		</div>
	</header>
	<div>
		<p>
			<h4>Registrate</h4>
			<form id="formRegistre">
				<label for="nameUser">Nombre:</label>
				<input type="text" id="nameUser" name="nameUser" placeholder="Ingresa tu nombre" required="">
				<label for="apUser">Apellidos:</label>
				<input type="text" id="appUser" name="appUser" placeholder="Ingresa tus apellidos" required="">
				<label for="ocupacionUser">Ocupacion:</label>
				<input type="text" id="ocupacionUser" name="ocupacionUser" placeholder="Ingresa tu ocupacion" required="">
				<label for="emailUser">Correo:</label>
				<input type="email" id="emailUser" name="emailUser" placeholder="Ingresa tu email" required="">	
				<label for="passUser">Password:</label>
				<input type="password" id="passUser" name="passUser" placeholder="Ingresa tu password" required="">		
				<label for="passIIUser">Confirma tu password</label>		
				<input type="password" id="passIIUser" name="passIIUser" placeholder="Confirma tu password" required="">
				<button type="submit">Registrate</button>
			</form>
		</p>
	</div>
	<script src="Views/JS/jquery-3.2.1.min.js"></script>
	<script src="Views/JS/sweet.js"></script>
	<script src="Views/JS/login.js"></script>
</body>
</html>