<?php  

session_start();
$idusuario = $_SESSION["sessionidusuario"];
if ($idusuario == "") {
    header('location:/view/login/index.php');
}
include '../../config/conDoc.php';
include 'subir_pdf.php';

$producto = $_REQUEST['producto'];

$conf = new Configuracion();
$conf->conectarBD();


insertaImagen($id_producto,"url_imagen",$conf);

$conf->desconectarDB();

header("Location: ../../config/documentos.php");



?>