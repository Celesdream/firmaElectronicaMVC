<?php 
session_start();
$idusuario = $_SESSION["sessionidusuario"];
if ($idusuario == "") {
    header('location:/view/login/index.php');
}
require_once "../config/database.php";

require_once "../controller/Documentos.php";

$id = $_POST['widgetID'];

$control = new DocumentosController();
$control->info($id);
?>