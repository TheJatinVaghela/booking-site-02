<?php
require_once("../model/model.php");
require_once("../controller/login-controller.php");
class controller extends model 
{   

    public function __construct(){
         parent::__construct();
        // $this->print_stuf($_SERVER);
  
        $this->site_initialize();
    }
    
    protected function site_initialize(){
       
        if($_SERVER["PATH_INFO"] == "/home"){
            $this->header_footer_inbitwin("../view/site/home.php");
        }
        else if(($_SERVER["PATH_INFO"] == ('/sign-in'))||($_SERVER["PATH_INFO"] == ('/sign-up'))){
            $login = new login_controller();
            $login->login_site_initialize();
           
        }
        else{

            header("Location:http://localhost/clones/booking-site-02/public/home");
        }
            
    }
    protected function header_footer_inbitwin($site){
        require_once("../view/site/header.php");
        require_once($site);
        require_once("../view/site/footer.php");
    }

}

$controller = new controller();
$controller->__construct();
?>