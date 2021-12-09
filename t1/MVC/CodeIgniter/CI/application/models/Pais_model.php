<?php
class Pais_model extends CI_Model {
    
    function c($nombre) {
        $pais = R::findOne('pais','nombre=?',[$nombre]);
        
        if ($pais==null) {
            $pais=R::dispense('pais');
            $pais->nombre = $nombre;
            R::store($pais);
        }
        else {
            throw new Exception("El país {$pais->nombre} ya existe");
        }
    }
    function u($idPais,$nombre){
        $pais = R::load('pais',$idPais);
        
        if($pais == null){
            throw new Exception("El país {$pais->nombre} no existe");
        }else {
            $pais->nombre = $nombre;
            R::store($pais);
        }
    }
    function d($idPais){
        $pais = R::load('pais',$idPais);
        if($pais == null){
            throw new Exception("El país {$pais->nombre} no existe");
        }else {
            R::trash($pais);
        }
    }
    
    function getAll() {
        return R::findAll('pais');
    }
    function getPaisById($idPais){
        return R::load('pais', $idPais);
        
    }
}
        
    
