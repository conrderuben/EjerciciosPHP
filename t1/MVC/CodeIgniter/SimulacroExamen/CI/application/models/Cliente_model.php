<?php 
class Cliente_model extends CI_Model {
    
    function c($nombre,$localidad) {
        
            $cliente=R::dispense('cliente');
            $cliente->nombre = $nombre;
            $cliente->localidad = R::load('localidad', $localidad);
            
            R::store($cliente);
        }
        
    
    function getAll(){
        return R::findAll('cliente');
    }
}
?>