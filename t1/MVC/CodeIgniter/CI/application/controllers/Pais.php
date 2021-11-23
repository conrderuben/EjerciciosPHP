<?php
class Pais extends CI_Controller {
    function r(){
        $this->load->model('Pais_model');
        $datos['paises'] = $this->Pais_model->getAll();
        frame($this, 'pais/r', $datos);
    }
    function c() {
        frame($this,'pais/c');
    }
    function cPost() {
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:'ninguno';
        $this->load->model('Pais_model');
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