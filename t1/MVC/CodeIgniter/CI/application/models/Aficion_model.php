<?php
class Aficion_model extends CI_Model {
    
    function c($nombre) {
        $aficion = R::findOne('aficion','nombre=?',[$nombre]);
        
        if ($aficion==null) {
            $aficion=R::dispense('aficion');
            $aficion->nombre = $nombre;
            R::store($aficion);
        }
        else {
            throw new Exception("La aficion {$aficion->nombre} ya existe");
        }
    }
    function u($idAficion,$nombre){
        $aficion = R::load('aficion',$idAficion);
        
        if($aficion == null){
            throw new Exception("La aficion {$aficion->nombre} no existe");
        }else {
            $aficion->nombre = $nombre;
            R::store($aficion);
        }
    }
    function d($idAficion){
        $aficion = R::load('aficion',$idAficion);
        if($aficion == null){
            throw new Exception("La aficion {$aficion->nombre} no existe");
        }else {
            R::trash($aficion);
        }
    }
    
    function getAll() {
        return R::findAll('aficion');
    }
    function getAficionById($idAficion){
        return R::load('aficion', $idAficion);
        
    }
}
