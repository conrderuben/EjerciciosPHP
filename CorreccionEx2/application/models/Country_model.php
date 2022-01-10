<?php
class Country_model extends CI_Model {
   
    function c($name) {
        $country= R::findOne('country','name=?',[$name]);
        
        if ($country==null) {
            $country=R::dispense('country');
            $country->name= $name;
            R::store($country);
        }
        else {
            throw new Exception("El país {$country->name} ya existe");
        }
    }

    function getAll() {
        return R::findAll('country');
    }
    
   
    function getCountryById($id) {
        return R::load('country',$id);
    }

   


}

?>