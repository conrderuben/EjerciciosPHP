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
        $datos = [
            'links' => [
                'BING' => 'http://www.bing.com',
                'GOOGLE' => 'http://www.google.com',
                'YAHOO' => 'http://www.yahoo.com'
                
            ]
        ];
        $this->load->view('ejercicios/ej03/index', $datos);
    }
}