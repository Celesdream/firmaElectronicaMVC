<?php
session_start();
if(isset($_SESSION['sessionidusuario']))
{
	header("location:/view/html/index.php");
}
?>

<!doctype html>
<html lang="es">
  <head>
  	<title>Firma Electrónica Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">FIRMA ELECTRÓNICA </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>BIENVENIDO</h2>
								<p>¿Aun no tienes cuenta?</p>
								<a href="#" class="btn btn-white btn-outline-white">Regístrate </a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h4 class="mb-4">INICIAR SESIÓN</h4>
			      		</div>
			      	</div>
							<form action="#" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Correo Electronico</label>
			      			<input type="text" class="form-control" placeholder="Username" name="user" id="user" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Contraseña</label>
		              <input type="password" class="form-control" placeholder="Password" name="pass" id="pass" required>
		            </div>
		            <div class="form-group">
		            	<button type="button" onclick="verificarUser()" class="form-control btn btn-primary submit px-3">INGRESAR</button>
		            </div>

		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="/js/usuario.js"></script>

	</body>
</html>

