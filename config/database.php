<?php

class Conectar
{
    public static function conexion()
    {
        $conexion = new mysqli("xx.xx.xx.xx","root","xx","firmaElectronica");
        return $conexion;
    }

}



?>