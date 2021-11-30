<?php
class Persona_model extends CI_Model {
    
    function c($nombre, $paisN, $paisV) {
        $pais = R::findOne('pais','nombre=?',[$nombre]);
        
        if ($paisN==null) {
            throw new Exception("ID País no puede ser nulo");
        }
            $persona = R::dispense('persona');
            $persona->nombre = $nombre;
            $persona->nace = R::load('pais',$paisN);
            $persona->vive = R::load('pais',$paisV);
            R::store($persona);
    }
    
    
    function getAll() {
        return R::findAll('persona');
    }
}