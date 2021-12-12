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
    function u($nombre, $paisN, $paisV,$idsAficionGusta,$idsAficionOdia,$idPersona){
        $persona = R::load('persona', $idPersona);
        $persona->nombre = $nombre;
        $persona->nace = R::load('pais',$paisN);
        $persona->vive = R::load('pais',$paisV);
        
        $idsComunes = [];
        
        
        // Actualización de gustos
        foreach ($persona->ownGustoList as $gusto) {
            if (in_array($gusto->aficion_id,$idsAficionGusta)) {
                $idsComunes[] = $gusto->aficion_id;
            }
            else {
                R::store($persona);
                R::trash($gusto);
            }
        }
        
        foreach (array_diff($idsAficionGusta, $idsComunes) as $idAficion) {
            $aficion = R::load('aficion',$idAficion);
            $gusto = R::dispense('gusto');
            $gusto->persona = $persona;
            $gusto->aficion = $aficion;
            R::store($persona);
            R::store($gusto);
        }
        
        // Actualización de odios
        $idsComunes = [];
        
        foreach ($persona->ownOdioList as $odio) {
            if (in_array($odio->aficion_id,$idsAficionOdia)) {
                $idsComunes[] = $odio->aficion_id;
            }
            else {
                R::store($persona);
                R::trash($odio);
            }
        }
        
        foreach (array_diff($idsAficionOdia, $idsComunes) as $idAficion) {
            $aficion = R::load('aficion',$idAficion);
            $odio = R::dispense('odio');
            $odio->persona = $persona;
            $odio->aficion = $aficion;
            R::store($persona);
            R::store($odio);
        }
        
        
        R::store($persona);
    }
    
    function d($idPersona){
        $persona = R::load('persona',$idPersona);
        if($persona == null){
            throw new Exception("La persona {$persona->nombre} no existe");
        }else {
            R::trash($persona);
        }
    }
        
    
    
    function getAll() {
        return R::findAll('persona');
    }
    
    function getPersonaById($idPersona){
        return R::load('persona', $idPersona);
    }
}