<?php
class Persona extends CI_Controller {
    function r(){
        $this->load->model('Persona_model');
        $datos['personas'] = $this->Persona_model->getAll();
        frame($this, 'persona/r', $datos);
    }
    function c() {
        $this->load->model('Pais_model');
        $data['paises'] = $this->Pais_model->getAll();
        
        $this->load->model('Aficion_model');
        $data['aficiones'] = $this->Aficion_model->getAll();
        
        frame($this,'persona/c',$data);
    }
    function cPost() {
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:'ninguno';
        $paisN = isset($_POST['paisN'])?$_POST['paisN']:'ninguno';
        $paisV = isset($_POST['paisV'])?$_POST['paisV']:'ninguno';
        $idsAficionGusta = isset($_POST['idAficionGusta']) ? $_POST['idAficionGusta'] : [];
        $idsAficionOdia = isset($_POST['idAficionOdia']) ? $_POST['idAficionOdia'] : [];
        try {
            $this->load->model('Persona_model');
            $this->Persona_model->c($nombre,$paisN, $paisV, $idsAficionGusta, $idsAficionOdia);
            $datos['personas'] = $this->Persona_model->getAll();
            $datos['mensaje'] = 'Persona insertada correctamente';
            $datos['color'] = 'success';
            frame($this,'persona/r', $datos);
        }
        catch (Exception $e) {
            $this->load->model('Persona_model');
            $datos['personas'] = $this->Persona_model->getAll();
            $datos['mensaje'] = 'La persona insertada ya existe';
            $datos['color'] = 'danger';
            frame($this,'persona/r', $datos);
        }
    }
    function u(){
        $idPersona = isset($_GET['idPersona'])?$_GET['idPersona']:null;
        $this->load->model('Pais_model');
        $datos['paises'] = $this->Pais_model->getAll();
        
        $this->load->model('Aficion_model');
        $datos['aficiones'] = $this->Aficion_model->getAll();
        
        $this->load->model('Persona_model');
        $datos['persona'] = $this->Persona_model->getPersonaById($idPersona);
        
        frame($this,'persona/u',$datos);
    }
    function uPost(){
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:'ninguno';
        $paisN = isset($_POST['paisN'])?$_POST['paisN']:'ninguno';
        $paisV = isset($_POST['paisV'])?$_POST['paisV']:'ninguno';
        $idsAficionGusta = isset($_POST['idAficionGusta']) ? $_POST['idAficionGusta'] : [];
        $idsAficionOdia = isset($_POST['idAficionOdia']) ? $_POST['idAficionOdia'] : [];
        $idPersona = isset($_POST['idPersona']) ? $_POST['idPersona'] : '';
        try {
            $this->load->model('Persona_model');
            $this->Persona_model->u($nombre,$paisN, $paisV, $idsAficionGusta, $idsAficionOdia,$idPersona);
            $datos['personas'] = $this->Persona_model->getAll();
            $datos['mensaje'] = 'Persona actualizada correctamente';
            $datos['color'] = 'success';
            frame($this,'persona/r', $datos);
        }
        catch (Exception $e) {
            $this->load->model('Persona_model');
            $datos['personas'] = $this->Persona_model->getAll();
            $datos['mensaje'] = 'La persona no se ha podido actualizar';
            $datos['color'] = 'danger';
            frame($this,'persona/r', $datos);
        }
    }
    function d(){
        $idPersona = isset($_GET['idPersona'])?$_GET['idPersona']:null;
        
        $this->load->model('Persona_model');
        $datos['persona'] = $this->Persona_model->getPersonaById($idPersona);
        frame($this,'persona/d',$datos);
    }
    function dPost(){
        $idPersona = isset($_POST['idPersona'])?$_POST['idPersona']:null;
        
        
        try{
            $this->load->model('Persona_model');
            $this->Persona_model->d($idPersona);
            $datos['personas'] = $this->Persona_model->getAll();
            $datos['mensaje'] = 'La persona ha sido eliminado correctamente';
            $datos['color'] = 'success';
            frame($this,'persona/r', $datos);
            
        }catch(Exception $e){
            $this->load->model('Persona_model');
            $datos['paises'] = $this->Persona_model->getAll();
            $datos['mensaje'] = 'La persona no se ha podido eliminar';
            $datos['color'] = 'danger';
            frame($this,'persona/r', $datos);
        }
    }
    
}