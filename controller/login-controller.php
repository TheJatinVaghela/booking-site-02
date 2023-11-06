<?php
require_once("../model/model.php");
class login_controller extends model 
{ 
    
    public function __construct(){
     
        // $this->login_site_initialize();
    } 
    
    public function login_site_initialize(){
        
      
        switch ($_SERVER["PATH_INFO"] ) {
            case '/sign-in':
                $this->chack_sign_in();
                $this->login_inbitwin("../view/sign_in_up/sign_in.php");
                break;

            case '/sign-up':
                $this->chack_sign_up();
                $this->login_inbitwin("../view/sign_in_up/sign_up.php");
                break;
            
            default:
                header("Location:http://localhost/clones/booking-site-02/public/home");
                break;
        }
         return;
    }

    public function login_inbitwin($site){
        require_once("../view/sign_in_up/header.php");
        require_once($site);
        require_once("../view/sign_in_up/footer.php");
    }

    protected function print_stuf_Log($stuf){
        echo "<pre>";
        print_r($stuf);
        echo "</pre>";
    }
    protected function chack_sign_in(){
        if(isset($_REQUEST["sign_in"])){
            if($_REQUEST["remember_me"]=='on'){
                $_REQUEST["remember_me"] = 1;
            }
            array_pop($_REQUEST);
            $this->print_stuf_Log($_REQUEST);
        }
    }
    protected function chack_sign_up(){
        if(isset($_REQUEST["sign_up"])){
            if($_REQUEST["Terms"]=='on'){
                $_REQUEST["Terms"] = 1;
            };
            if($_REQUEST["user_pass_1"]==$_REQUEST["user_pass_2"]){

                array_pop($_REQUEST);
                $this->print_stuf_Log($_REQUEST);
            }else{
                print_r("<h4> <center> Password Not Same </center> </h4> ");
            };
        }
    }
}
?>