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
        $paisR = isset($_POST['paisR'])?$_POST['paisR']:'ninguno';
        
        $this->load->model('Persona_model');
        try {
            $this->load->model('Persona_model');
            $datos['personas'] = $this->Pais_model->getAll();
            $this->Persona_model->c($nombre);
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
    
}