<?php
class Persona_model extends CI_Model {
    
    function c($nombre, $paisN, $paisV,$idsAficionGusta,$idsAficionOdia) {
        if ($paisN==null) {
            throw new Exception("ID País no puede ser nulo");
        }
        
        
            $persona = R::dispense('persona');
            $persona->nombre = $nombre;
            $persona->nace = R::load('pais',$paisN);
            $persona->vive = R::load('pais',$paisV);
            
            foreach ($idsAficionGusta as $idAficionGusta) {
                $aficionGusta = R::load('aficion',$idAficionGusta);
                $gusto = R::dispense('gusto');
                $gusto->persona = $persona;
                $gusto->aficion = $aficionGusta;
                R::store($gusto);
            }
            foreach ($idsAficionOdia as $idAficionOdia) {
                $aficionOdia = R::load('aficion',$idAficionOdia);
                $odio = R::dispense('odio');
                $odio->persona = $persona;
                $odio->aficion = $aficionOdia;
                R::store($odio);
            }
            
            R::store($persona);
        
    }
    
    
    function getAll() {
        return R::findAll('persona');
    }
}