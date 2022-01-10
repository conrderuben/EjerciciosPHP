<?php
class User_model extends CI_Model {
    
   
    public function c($name,$dni,$idBorn) {
        
        if ($dni==null) {
            throw new Exception("Dni no puede ser nulo");
        }
        $user=R::findOne('user','dni=?',[$dni]);
        if($user==null){
        $user= R::dispense('user');
        $user->name= $name;
        $user->dni= $dni;
        
        $user->born= R::load('city',$idBorn);
        R::store($user);
        }
    }
    
    public function getAll() {
        return R::findAll('user');
    }

    function registerTravel($dni,$idCityTravel) {
        $user=R::findOne('user','dni=?',[$dni]);
        if($user!=null){
            foreach ($user->ownTravelList as $travel){
                R::store($user);
                R::trash($travel);
             
            }
            foreach ($idsCityTravel as $idCity){
              $travel=R::dispense('travel');
              $travel->user=$user;
              $travel->city=R::load('city',$idCity);
           R::store($travel);
            }
        }else{
            throw new Exception("Dni no existe");
        }
                
        R::store($persona);
    }
    
    function getUserById($id) {
        return R::load('user',$id);
    }
    
  
}
?>