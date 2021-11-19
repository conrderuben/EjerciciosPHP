<?php

class Ejercicios extends CI_Controller
{

    public function ej01()
    {
        $this->load->view('ejercicios/ej01/index');
    }

    public function ej02()
    {
        $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'John Doe';
        $datos['nombre'] = $nombre;
        $this->load->view('ejercicios/ej02/index', $datos);
    }

    public function ej03()
    {
       $this->load->model('Ejercicios_model');
       $d['pepe']=$this->Ejercicios_model->getLinks();
       $this->load->view('ejercicios/ej03/index', $d);
    }
}