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
            $this->Aficion_model->c($nombre);
            $datos['aficiones'] = $this->Aficion_model->getAll();
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
    function u(){
        $idAficion = isset($_GET['idAficion'])?$_GET['idAficion']:null;
        $this->load->model('Aficion_model');
        $datos['aficion'] = $this->Aficion_model->getAficionById($idAficion);
        frame($this,'aficion/u',$datos);
        
    }
    function uPost(){
        $idAficion = isset($_POST['idAficion'])?$_POST['idAficion']: null;
        $nombre = isset($_POST['nombre'])?$_POST['nombre']: null;
        
        try{
            $this->load->model('Aficion_model');
            $this->Aficion_model->u($idAficion,$nombre);
            
            $datos['aficiones'] = $this->Aficion_model->getAll();
            $datos['mensaje'] = 'La aficion ha sido modificado correctamente';
            $datos['color'] = 'success';
            frame($this,'aficion/r', $datos);
            
        }catch(Exception $e){
            $this->load->model('Aficion_model');
            $datos['aficiones'] = $this->Aficion_model->getAll();
            $datos['mensaje'] = 'La aficion no se ha modificado correctamente';
            $datos['color'] = 'danger';
            frame($this,'aficion/r', $datos);
        }
        
    }
    function d(){
        $idAficion= isset($_GET['idAficion'])?$_GET['idAficion']:null;
        
        $this->load->model('Aficion_model');
        $datos['aficion'] = $this->Aficion_model->getAficionById($idAficion);
        frame($this,'aficion/d',$datos);
    }
    function dPost(){
        $idAficion = isset($_POST['idAficion'])?$_POST['idAficion']:null;
        
        
        try{
            $this->load->model('Aficion_model');
            $this->Aficion_model->d($idAficion);
            $datos['aficiones'] = $this->Aficion_model->getAll();
            $datos['mensaje'] = 'La aficion ha sido eliminado correctamente';
            $datos['color'] = 'success';
            frame($this,'aficion/r', $datos);
            
        }catch(Exception $e){
            $this->load->model('Aficion_model');
            $datos['paises'] = $this->Aficion_model->getAll();
            $datos['mensaje'] = 'La aficion no se ha podido eliminar';
            $datos['color'] = 'danger';
            frame($this,'aficion/r', $datos);
        }
    }
    
    
}