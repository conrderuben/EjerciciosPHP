<?php
class Persona_model extends CI_Model {
    
    function c($nombre) {
        $pais = R::findOne('pais','nombre=?',[$nombre]);
        
        if ($persona==null) {
            $persona=R::dispense('persona');
            $persona->nombre = $nombre;
            R::store($persona);
        }
        else {
            throw new Exception("La persona {$persona->nombre} ya existe");
        }
    }
    
    function getAll() {
        return R::findAll('persona');
    }
}