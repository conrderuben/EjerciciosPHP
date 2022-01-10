<?php
class User extends CI_Controller {
 
    
    public function r() {
       
        $this->load->model('User_model');
        $data['users'] = $this->User_model->getAll();
        frame($this,'user/r',$data);
    }
    
    public function c() { 
        $this->load->model('City_model');
        $data['cities'] = $this->City_model->getAll();
              
        frame($this,'user/c',$data);
    }
    
    public function cPost() {
     
        
        $name= isset($_POST['name']) ? $_POST['name'] : 'John Doe';
        $dni= isset($_POST['dni']) ? $_POST['dni'] : 'John Doe';
        $idBorn= isset($_POST['idBorn']) ? $_POST['idBorn'] : null;
    
        $this->load->model('User_model');
        
        try {
            $this->User_model->c($name,$dni,$idBorn);
            redirect(base_url().'user/r');
        }
        catch (Exception $e) {
            errorMsg($e->getMessage(),'user/c');
        }
    }
    public function register(){
        $this->load->model('City_model');
        $data['cities']=$this->City_model->getAll();
        frame($this,'user/register',$data);
    }
    public function registerPost(){
        $dni= isset($_POST['dni']) ? $_POST['dni'] : 'John Doe';
        $idsCityTravel=isset($_POST['idCityTravel']) ? $_POST['idCityTravel'] : [];
    $this->load->model('User_model');
    try{
    $this->User_model->registerTravel($dni,$idsCityTravel);
    redirect('user/r');
    }catch(Exception $e){
        errorMsg($e->getMessage(),'user/register');
    }
    
    }
    
   
}
?>