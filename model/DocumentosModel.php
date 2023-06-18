<?php
        use Mifiel\ApiClient as Mifiel;
        use Mifiel\Document;
class Documentos_model
{
    private $db;
    private $documentos;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->documentos = array();
    }

    //se obtienen la lista de documentos subidos al servidor
    public function get_documentos($idusuario)
    {
        $sql = "SELECT * FROM documentos WHERE estado = '1' AND id_usuario ='$idusuario'";

        $resultado = $this->db->query($sql);

        while($row = $resultado->fetch_assoc())
        {
            $this->documentos[] = $row;

        }

        return $this->documentos;
    }

    
    public function obtener_widget_id($id)
    {
        require '../vendor/autoload.php';
        Mifiel::setTokens('xxx', 'xxxx');
        Mifiel::url('https://app-sandbox.mifiel.com/api/v1/documents');
        return Document::find("$id");
    }


    //se obtienen los docuemtnos que ya fueron enviados para su efirma
    public function get_status($idUsuario)
    {
        $sql = "SELECT * FROM documentos WHERE estado = '2'  AND id_usuario = '$idUsuario'";

        $resultado = $this->db->query($sql);

        while($row = $resultado->fetch_assoc())
        {
            $this->documentos[] = $row;

        }

        return $this->documentos;
    }


    public function update_documentos($idDoc,$idUSER)
    {
        $sql = "UPDATE documentos SET estado = '2' WHERE id_usuario = '$idUSER' AND id = '$idDoc'";

        $resultado = $this->db->query($sql);
    }

    public function eliminar($idDoc,$idUSER)
    {
        $sql = "UPDATE documentos SET estado = '3' WHERE id_usuario = '$idUSER' AND id = '$idDoc'";
        $resultado = $this->db->query($sql);
    }

    
    public function update_widget($idDoc,$idWidget)
    {
        $sql = "UPDATE documentos SET id_widget = '$idWidget' WHERE id = '$idDoc'";
        $resultado = $this->db->query($sql);
    }
}

?>