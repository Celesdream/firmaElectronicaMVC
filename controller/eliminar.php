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


  use Mifiel\ApiClient as Mifiel;
  use Mifiel\Document;
  Mifiel::setTokens('2a72e83aefd47b022a4ef90fec8a93b3c151553f', '8eubzw3JpS2mdcbsgTfBF/eCVSqNpZ82CvBGF7sgeAyEF3DNqZR0kyGfKgVlcSE4N/O/mtaPIAcPEWaCgcvtPg==');
  Mifiel::url('https://app-sandbox.mifiel.com/api/v1/documents');

Document::delete($widgetID);