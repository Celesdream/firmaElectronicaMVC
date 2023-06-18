<?php

class conexion
{
    private $servidor;
    private $user;
    private $pass;
    private $db;
    public $conexion;

    public function __construct()
    {
        $this->servidor = "xx.xx.xx.xx";
        $this->pass = "xxxx";
        $this->user = "root";
        $this->db = "firmaElectronica";

    }

    function conectar()
    {
        $this->conexion = new mysqli($this->servidor, $this->user,$this->pass,$this->db);
        $this->conexion->set_charset("utf8");

    }

    function cerrar()
    {
        $this->conexion->close();
    }


}

?>