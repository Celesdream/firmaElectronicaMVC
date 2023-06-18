<?php
session_start();
class DocumentosController
{
    public function index($idusuario)
    {
        require "../model/DocumentosModel.php";
        $documentos = new Documentos_model();
        $data["documentos"]=$documentos->get_documentos($idusuario);
        require "../view/documentos/documentos.php";


    }


    public function status($idUsuario)
    {
        require "../model/DocumentosModel.php";
        $documentos = new Documentos_model();
        $data["documentos"]=$documentos->get_status($idUsuario);
        require "../view/documentos/status.php";
    }



    public function update($idDoc,$idUSER,$idWidget)
    {
        require "../model/DocumentosModel.php"; 
        $docs = new Documentos_model();
        $doc["documentos"]=$docs->update_documentos($idDoc,$idUSER);
        $doc["update"]=$docs->update_widget($idDoc,$idWidget);
        require "../view/documentos/documentos.php";
    }

    public function eliminar($idDoc,$idUSER)
    {
        require "../model/DocumentosModel.php"; 
        $docs = new Documentos_model();
        $doc["documentos"]=$docs->eliminar($idDoc,$idUSER);
        require "../view/documentos/documentos.php";
    }


    public function saveWidget($idDoc,$idWidget)
    {
        require "../model/DocumentosModel.php"; 
        $widget = new Documentos_model();
        $widget["documentos"]=$widget->update_widget($idDoc,$idWidget);
        require "../view/documentos/crearSolicitud.php";
    }


    public function info($id)
    {

        require "../model/DocumentosModel.php";
        $documentos = new Documentos_model();

        //el estatus del documento, pending o success
        $state["status"]=$documentos->obtener_widget_id($id)->state;

        //el nombre del documento que se subio a firmar
        $name["nombre"] = $documentos->obtener_widget_id($id)->file_file_name;

        //la fecha de vencimiento del documento
        $expires["fechaVencimiento"] = $documentos->obtener_widget_id($id)->expires_at;

       //extraemos a quien se le solicito el docuemtno
        foreach( $documentos->obtener_widget_id($id)->signers as $result)
        {
            $firm[] = $result->name;
        }
        
        $signers["signers"] = $firm[0];
        $signers2["signers"] = $firm[1];
        $signers3["signers"] = $firm[2];

        foreach( $documentos->obtener_widget_id($id)->signers as $resultado)
        {
            $correos[] = $resultado->email;
        }
        
        $mail["mail"] = $correos[0];
        $mail2["mail"] = $correos[1];
        $mail3["mail"] = $correos[2];

        require "../view/documentos/infoDocumento.php";
    }

    
}
