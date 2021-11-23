<?php
class Persona extends CI_Controller {
    function r(){
        $this->load->model('Persona_model');
        $datos['personas'] = $this->Persona_model->getAll();
        frame($this, 'persona/r', $datos);
    }
    function c() {
        frame($this,'persona/c');
    }
    function cPost() {
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:'ninguno';
        $paisN = isset($_POST['paisN'])?$_POST['paisN']:'ninguno';
        $paisR = isset($_POST['paisR'])?$_POST['paisR']:'ninguno';
        
        $this->load->model('Persona_model');
        try {
            $this->load->model('Pais_model');
            $datos['paises'] = $this->Pais_model->getAll();
            $this->Pais_model->c($nombre);
            $datos['mensaje'] = 'Pais insertado correctamente';
            $datos['color'] = 'success';
            frame($this,'pais/r', $datos);
        }
        catch (Exception $e) {
            $this->load->model('Pais_model');
            $datos['paises'] = $this->Pais_model->getAll();
            $datos['mensaje'] = 'El pais insertado ya existe';
            $datos['color'] = 'danger';
            frame($this,'pais/r', $datos);
        }
    }
    
}