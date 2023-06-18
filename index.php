<?php

header("location:view/login/index.php");


require_once "config/database.php";

require_once "controller/Documentos.php";

$control = new DocumentosController();
$control->index();


?>