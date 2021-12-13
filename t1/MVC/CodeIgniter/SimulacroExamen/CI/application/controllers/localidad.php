<?php
class Localidad extends CI_Controller {
    public function c() {
        frame($this,'localidad/c');
    }


    public function cPost() {
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
        $provincia = isset($_POST['Provincia'])?$_POST['Provincia']:null;
        $this->load->model('Localidad_model');
        $this->Localidad_model->c($nombre,$provincia);
        $datos['localidades'] = $this->Localidad_model->getAll();
        frame($this,'localidad/r',$datos);
        
}

}