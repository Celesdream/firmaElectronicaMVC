<?php
require '../vendor/autoload.php';
require_once "../config/database.php";
require_once "../controller/Documentos.php";
session_start();
  use Mifiel\ApiClient as Mifiel;
  use Mifiel\Document;
  Mifiel::setTokens('xxx', 'xxx');
  Mifiel::url('https://app-sandbox.mifiel.com/api/v1/documents');
 
    
//se reciben por POST los datos generales del documento
$path = htmlspecialchars($_POST["path"], ENT_QUOTES, "UTF-8");
$id = htmlspecialchars($_POST["id"], ENT_QUOTES, "UTF-8");
$idUSER = htmlspecialchars($_POST["idUSER"], ENT_QUOTES, "UTF-8");
$expira = htmlspecialchars($_POST["expira"], ENT_QUOTES, "UTF-8");

$path2 = "../uploads/";

//se reciben por POST los datos del FIRMANTE #1
$nombre1 = htmlspecialchars($_POST["nombre1"], ENT_QUOTES, "UTF-8");
$RFC1 = htmlspecialchars($_POST["RFC1"], ENT_QUOTES, "UTF-8");
$correo1 = htmlspecialchars($_POST["correo1"], ENT_QUOTES, "UTF-8");

//se reciben por POST los datos del FIRMANTE #2
$nombre2 = htmlspecialchars($_POST["nombre2"], ENT_QUOTES, "UTF-8");
$RFC2 = htmlspecialchars($_POST["RFC2"], ENT_QUOTES, "UTF-8");
$correo2 = htmlspecialchars($_POST["correo2"], ENT_QUOTES, "UTF-8");

//se reciben por POST los datos del FIRMANTE #3
$nombre3 = htmlspecialchars($_POST["nombre3"], ENT_QUOTES, "UTF-8");
$RFC3 = htmlspecialchars($_POST["RFC3"], ENT_QUOTES, "UTF-8");
$correo3 = htmlspecialchars($_POST["correo3"], ENT_QUOTES, "UTF-8");



//guardamos los datos de los 3 firmantes dentro de un array
$nombre = [$nombre1,$nombre2,$nombre3];
$email =[$correo1,$correo2,$correo3];
$rfc =[$RFC1,$RFC2,$RFC3];

//como la API de Mifiel utiliza un objeto, para recibir los datos personales
//de cada firmante, creamos una clase FIRMANTE
class FIRMANTE
{
    public $name;
    public $email;
    public $tax_id;
}

//A continuacion, como hay como maximo 3 firmantes, los siguientes condicionales
//son para "detectar" si el usuario ingreso ya sea 1,2 o 3 firmantes


//CASO #1 SOLO HAY UN FIRMANTE
if($nombre[0]!=null && $email[0]!=null && $rfc[0]!=null && $nombre[1]==null || $email[1]==null || $rfc[1]==null)
{
  $doc1 = new FIRMANTE();
  $doc1->name = $nombre[0];
  $doc1->email = $email[0];
  $doc1->tax_id = $rfc[0];
  $firmante = array($doc1);
}


//CASO #2 HAY DOS FIRMANTES
 if($nombre[1]!=null && $email[1]!=null && $rfc[1]!= null)
{
  $doc1 = new FIRMANTE();
  $doc1->name = $nombre[0];
  $doc1->email = $email[0];
  $doc1->tax_id = $rfc[0];

  $doc2 = new FIRMANTE();
  $doc2->name = $nombre[1];
  $doc2->email =  $email[1];
  $doc2->tax_id = $rfc[1];

  $firmante = array($doc1,$doc2);
}

//CASO #3 HAY TRES FIRMANTES
if($nombre[2]!=null && $email[2]!=null && $rfc[2]!= null )
{
  $doc1 = new FIRMANTE();
  $doc1->name = $nombre[0];
  $doc1->email = $email[0];
  $doc1->tax_id = $rfc[0];

  $doc2 = new FIRMANTE();
  $doc2->name = $nombre[1];
  $doc2->email =  $email[1];
  $doc2->tax_id = $rfc[1];

  $doc3 = new FIRMANTE();
  $doc3->name = $nombre[2];
  $doc3->email =  $email[2];
  $doc3->tax_id = $rfc[2];

  $firmante = array($doc1,$doc2,$doc3);
}




$document = new Document([
'file_path' =>  "../uploads/".$path,
'signatories' => $firmante,
'send_invites' => true,
'days_to_expire' => $expira

]);


$document->save();
echo $document->id;
echo $document->file_file_name;

$update = new DocumentosController();
$update->update($id,$idUSER,$document->id);



?>