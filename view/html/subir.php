<?php 
session_start();
$idusuario = $_SESSION["sessionidusuario"];
if ($idusuario == "") {
    header('location:/view/login/index.php');
}?>
<!DOCTYPE html>
<html>

<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="">Aquí puede subir sus documentos para solicitar que los firmen electrónicamente, recuerde que el tamaño máximo del archivo es de 20MB y únicamente archivos .PDF </a>
                </li>
            </ul>
        </div>
    </nav>
	<br><br> <br>
<div class="container-fluid">
<form data-toggle="validator" action = "registrar.php" method = "post" role="form" enctype="multipart/form-data">
		<input type="text" name="producto">
		<input type="file" name="url_imagen" accept=".pdf" /> 

		<button type="submit">Subir PDF</button>

	</form>
</div>
<div>

<br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br>
</div>

</body>
</html>
