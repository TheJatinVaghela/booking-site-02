<?php
require_once("../model/model.php");
require_once("../controller/login-controller.php");
require_once("../controller/user-controller.php");
class controller extends model 
{   
    public $user_info;
    public function __construct(){
         parent::__construct();
        // $this->print_stuf($_SERVER);
  
        $this->site_initialize();
    }
    
    protected function site_initialize(){
       
        if($_SERVER["PATH_INFO"] == "/home"){
            
            $this->user_info = $_SESSION["user_info"];
            // $this->print_stuf($this->user_info["user_name"]);
            $this->header_footer_inbitwin("../view/site/home.php");
        }
        else if(($_SERVER["PATH_INFO"] == ('/sign-in'))||($_SERVER["PATH_INFO"] == ('/sign-up'))){
            $login = new login_controller();
            $login->login_site_initialize();
           
        }
        else if($_SERVER["PATH_INFO"] = "/user"){
            $user = new user_controller();
            $user->user_site_initialize();
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