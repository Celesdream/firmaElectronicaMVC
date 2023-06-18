<?php
session_start();
require '../vendor/autoload.php';
require_once "../config/database.php";
require_once "../controller/Documentos.php";

$widgetID = htmlspecialchars($_POST["widgetID"], ENT_QUOTES, "UTF-8");
$idDoc = htmlspecialchars($_POST["idDoc"], ENT_QUOTES, "UTF-8");
$docUser = htmlspecialchars($_POST["docUser"], ENT_QUOTES, "UTF-8");

$eliminar = new DocumentosController();
$eliminar->eliminar($idDoc,$docUser);