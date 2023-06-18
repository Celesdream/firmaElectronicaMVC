<?php 

session_start();
$idusuario = $_SESSION["sessionidusuario"];
if ($idusuario == "") {
    header('location:/view/login/index.php');
}
function insertaImagen($id_producto,$tipo_imagen,$conf){

	if(empty($_FILES[$tipo_imagen]["name"]))
	return;

	$file_name = $_FILES[$tipo_imagen]["name"];
	$extension = pathinfo($_FILES[$tipo_imagen]["name"],PATHINFO_EXTENSION);
	$ext_formatos = array('pdf');


	if(!in_array(strtolower($extension),$ext_formatos))
		return;

	if($_FILES[$tipo_imagen]["size"] > 20971520)
		return;

	$dia = date("d");
	$mes = date("m");
	$anio = date("Y");

	$targetDir = "../../uploads/";

	@rmdir($targetDir);

	if (!file_exists($targetDir)){

		@mkdir($targetDir,077,true);
	}

	$token = md5(uniqid(rand(), true));
	$file_name = 'DOCUMENTO__'.$token.'_'.$dia.$mes.$anio.'.'.$extension;

	$nombrePDF = $file_name.$targetDir;
	$add = $targetDir.$file_name;
	$db_url_img = "$anio/$mes/$dia/$file_name";
	$user = $_SESSION['sessionidusuario'];

	if(move_uploaded_file($_FILES[$tipo_imagen]["tmp_name"],$add)){
		$sql ="INSERT INTO documentos (nombre,id_usuario,ruta,estado) VALUES ('$file_name',$user,'$file_name','1')";
		$conf ->actualizacion($sql);


	}


}

 ?>