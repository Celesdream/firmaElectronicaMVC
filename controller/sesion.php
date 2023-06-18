<?php

//nos traemos el idsuario en post
$idusuario = $_POST['idusuario'];
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$rfc = $_POST['rfc'];
session_start();

$_SESSION['sessionidusuario'] = $idusuario;
$_SESSION['sessionCorreo'] = $correo;
$_SESSION['sessionNombre'] = $nombre;
$_SESSION['sessionRFC'] = $rfc;
?>