<?php
class City extends CI_Controller {
    function r() {
        $this->load->model('City_model');
        $data['cities'] = $this->City_model->getAll();
        frame($this,'city/r',$data);
    }
    
    function c() {
        $this->load->model('Country_model');
        $data['countries'] = $this->Country_model->getAll();
        frame($this,'city/c',$data);
    }
    
    function cPost() {
        $name= isset($_POST['name'])?$_POST['name']:'ninguno';
        $idCountry= isset($_POST['idCountry'])?$_POST['idCountry']:'ninguno';
        $this->load->model('City_model');
        try {
            $this->City_model->c($name,$idCountry);
            redirect(base_url().'city/r');
        }
        catch (Exception $e) {
           errorMsg($e->getMessage(),'city/c');
        }
    }

  

}
?>