<?php
class Aficion_model extends CI_Model {
    
    function c($nombre) {
        $aficion = R::findOne('aficion','nombre=?',[$nombre]);
        
        if ($aficion==null) {
            $aficion=R::dispense('pais');
            $aficion->nombre = $nombre;
            R::store($aficion);
        }
        else {
            throw new Exception("La aficion {$aficion->nombre} ya existe");
        }
    }
    
    function getAll() {
        return R::findAll('aficion');
    }
}
