<?php
class City_model extends CI_Model {
   
    function c($name,$idCountry) {
        $city= R::findOne('city','name=?',[$name]);
        
        if ($city==null) {
            $city=R::dispense('city');
            $city->name= $name;
            $city->in=R::load('country',$idCountry);
            R::store($city);
        }
        else {
            throw new Exception("La ciudad {$city->name} ya existe");
        }
    }
    
    function getAll() {
        return R::findAll('city');
    }

   
    function getCityById($id) {
        return R::load('city',$id);
    }
    
  
}
?>