<?php

class Ejercicios_model extends CI_Model
{
    private function adaptar($beans) {
        $datos = [];
        foreach ($beans as $bean) {
            $datos[$bean->label] = $bean->uri;
        }
        return $datos;
    }
    
    public function getLinks()
    {
        /*
        $datos = [
            'BING' => 'http://www.bing.com',
            'GOOGLE' => 'http://www.google.com',
            'YAHOO' => 'http://www.yahoo.com',
            'FACEBOOK' => 'http://www.facebook.com',
            'TWITTER' => 'http://www.twitter.com'
        ];
        */
        return $this->adaptar(R::findAll('enlaces'));
    }
}
?>