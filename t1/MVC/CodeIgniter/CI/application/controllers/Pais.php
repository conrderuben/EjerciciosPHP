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
            $this->Pais_model->c($nombre);
            $datos['paises'] = $this->Pais_model->getAll();
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
    function u(){
        $idPais = isset($_GET['idPais'])?$_GET['idPais']:null;
        $this->load->model('Pais_model');
        $datos['pais'] = $this->Pais_model->getPaisById($idPais);
        frame($this,'pais/u',$datos);
        
    }
    function uPost(){
        $idPais = isset($_POST['idPais'])?$_POST['idPais']: null;
        $nombre = isset($_POST['nombre'])?$_POST['nombre']: null;
        
        try{
            $this->load->model('Pais_model');
            $this->Pais_model->u($idPais,$nombre);
            
            $datos['paises'] = $this->Pais_model->getAll();
            $datos['mensaje'] = 'El pais ha sido modificado correctamente';
            $datos['color'] = 'success';
            frame($this,'pais/r', $datos);
            
        }catch(Exception $e){
            $this->load->model('Pais_model');
            $datos['paises'] = $this->Pais_model->getAll();
            $datos['mensaje'] = 'El pais no se ha modificado correctamente';
            $datos['color'] = 'danger';
            frame($this,'pais/r', $datos);
        }
        
    }
    function d(){
        $idPais = isset($_GET['idPais'])?$_GET['idPais']:null;
        
        $this->load->model('Pais_model');
        $datos['pais'] = $this->Pais_model->getPaisById($idPais);
        frame($this,'pais/d',$datos);
    }
    function dPost(){
        $idPais = isset($_POST['idPais'])?$_POST['idPais']:null;
 
        
        try{
            $this->load->model('Pais_model');
            $this->Pais_model->d($idPais);
            $datos['paises'] = $this->Pais_model->getAll();
            $datos['mensaje'] = 'El pais ha sido eliminado correctamente';
            $datos['color'] = 'success';
            frame($this,'pais/r', $datos);
            
        }catch(Exception $e){
            $this->load->model('Pais_model');
            $datos['paises'] = $this->Pais_model->getAll();
            $datos['mensaje'] = 'El pais no se ha podido eliminar';
            $datos['color'] = 'danger';
            frame($this,'pais/r', $datos);
        }
    }

}