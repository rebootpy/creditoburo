<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="https://uploads-ssl.webflow.com/5e3c807f0eb5905168653b61/5e46eb491ffbe325e07c8e61_32x32-14.png">
	<link rel="stylesheet" href="assets/index.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="assets/pages1.css">
	<title>Registro Scoplo.com</title>
</head>
<body>
	<nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<i class="fas fa-bars"></i>
		</label>
		<label class="logo">Scoplo</label>
		<ul>
			<li><a href="index.php" class="text">Home</a></li>
			<li><a class="active" href="registro.php">Comienza ahora, es gratis</a></li>
		</ul>
	</nav>
	<!--Procedimiento-->
	<div class="procedimiento">
		<div class="align-procedimiento">
			<div class="titl">
				<p class="pasos">Paso 2 de 3</p>
				<h1>Para un mejor servicio</h1>
				<p class="mini">Ingresa los datos solicitados, nos ayudara a validar tu identidad.</p>
			</div>
			<div class="formulario-god">
				<form action="ine-val.php" method="POST">
					<div class="contenido">
						<h1>Datos INE</h1>
						<label>Nombre Completo</label>
						<br>
						<input type="text" name="name" placeholder="Nombre Completo">
						<br>
						<label for="text">Clave de Elector</label>
						<br>
						<input type="text" placeholder="Clave de Elector" name="key">
						<br>
						<label>CURP</label>
						<br>
						<input type="text" name="crp" placeholder="CURP">
						<br>
					</div>
					<div class="contenido">
						<button type="submit" class="form-button">Siguiente</button>
					</div>
					<div class="contenido"></div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>