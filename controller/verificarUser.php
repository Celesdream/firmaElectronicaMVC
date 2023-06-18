<?php

use function GuzzleHttp\json_encode;

require "../model/usuario.php";

$modelo = new Modelusuario();

//Tomamos el user y pass del POST
$user = htmlspecialchars($_POST["user"], ENT_QUOTES, "UTF-8");
$pass = htmlspecialchars($_POST["pass"], ENT_QUOTES, "UTF-8");



$consulta = $modelo->VerficarUsuario($user, $pass);

$data = \json_encode($consulta);

if (count($consulta) > 0) 
{
    echo $data;
}
 else 
{
    echo 0;
}
