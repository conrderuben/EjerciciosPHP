<?php

class Country extends CI_Controller
{

    function r()
    {
        $this->load->model('Country_model');
        $data['countries'] = $this->Country_model->getAll();
        frame($this, 'country/r', $data);
    }

    function c()
    {
        frame($this, 'country/c');
    }

    function cPost()
    {
        $name= isset($_POST['name']) ? $_POST['name'] : 'ninguno';
        $this->load->model('Country_model');
        try {
            $this->Country_model->c($name);
        
            redirect('country/r');
        } catch (Exception $e) {
            errorMsg($e->getMessage(), 'country/c');
        }
    }

}
?>