<?php

class Modelusuario
{
    private $conexion;

    function __construct()
    {
        require_once 'conexion.php';
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }

    function VerficarUsuario($user,$pass)
    {
        $sql = "call SP_VERIFICAR_USUARIO('$user')";
        $arreglo = array();

        if($consulta = $this->conexion->conexion->query("call SP_VERIFICAR_USUARIO('$user')"))
        {
            while($query_VU = mysqli_fetch_array($consulta))
            {
                if(password_verify($pass,$query_VU["pass"]))
                {
                    $arreglo[] = $query_VU;
                }
            }
            return $arreglo;
            $this->conexion->cerrar();
        }

    }
}



?>