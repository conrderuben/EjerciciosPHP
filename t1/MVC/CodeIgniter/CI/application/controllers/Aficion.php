<?php
class Aficion extends CI_Controller {
    function r(){
        $this->load->model('Aficion_model');
        $datos['aficiones'] = $this->Aficion_model->getAll();
        frame($this, 'aficion/r', $datos);
    }
    function c() {
        frame($this,'aficion/c');
    }
    function cPost() {
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:'ninguno';
        try {
            $this->load->model('Aficion_model');
            $datos['aficiones'] = $this->Aficion_model->getAll();
            $this->Aficion_model->c($nombre);
            $datos['mensaje'] = 'Aficion insertada correctamente';
            $datos['color'] = 'success';
            frame($this,'aficion/r', $datos);
        }
        catch (Exception $e) {
            $this->load->model('Aficion_model');
            $datos['aficiones'] = $this->Aficion_model->getAll();
            $datos['mensaje'] = 'La aficion insertada ya existe';
            $datos['color'] = 'danger';
            frame($this,'aficiones/r', $datos);
        }
    }
    
}