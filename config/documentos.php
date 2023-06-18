<?php 
session_start();
$idusuario = $_SESSION["sessionidusuario"];
if ($idusuario == "") {
    header('location:/view/login/index.php');
}
//NOS TRAEMOS LA LISTA DE DOCUEMNTOS YA SUBIDOS
require_once "../config/database.php";

require_once "../controller/Documentos.php";



$control = new DocumentosController();
$control->index($_SESSION['sessionidusuario'] );

?>