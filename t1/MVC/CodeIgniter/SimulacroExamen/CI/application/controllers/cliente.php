<?php
class Cliente extends CI_Controller {
    public function c() {
        $this->load->model('Localidad_model');
        $datos['localidades'] = $this->Localidad_model->getAll();
        frame($this,'cliente/c', $datos);
    }
    
    public function cPost(){
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
        $localidad = isset($_POST['localidad'])?$_POST['localidad']:null;
        
        $this->load->model('Cliente_model');
        $this->Cliente_model->c($nombre,$localidad);
        $datos['clientes'] = $this->Cliente_model->getAll();
        frame($this,'cliente/r',$datos);
    }
}