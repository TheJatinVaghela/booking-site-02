<?php
require_once("../model/model.php");
class login_controller extends model 
{ 
    
    public function __construct(){
     
        // $this->login_site_initialize();
    } 
    
    public function login_site_initialize(){
        
        if($_SERVER["PATH_INFO"] == '/sign-in'){
            $this->chack_sign_in();
            $this->login_inbitwin("../view/sign_in_up/sign_in.php");
        }
        else if($_SERVER["PATH_INFO"] == '/sign-up'){
            $this->chack_sign_up();
            $this->login_inbitwin("../view/sign_in_up/sign_up.php");
        }
        else{
            header("Location:http://localhost/clones/booking-site-02/public/home");
            return;
        }
    }

    public function login_inbitwin($site){
        require_once("../view/sign_in_up/header.php");
        require_once($site);
        require_once("../view/sign_in_up/footer.php");
    }

    protected function chack_sign_in(){
        if(isset($_REQUEST["sign_in"])){
            if($_REQUEST["remember_me"]=='on'){
                $_REQUEST["remember_me"] = 1;
            }
            array_pop($_REQUEST);
            $this->print_stuf($_REQUEST);
            $answer = $this->chack_user_exist("account",$_REQUEST["chack_user_mail"]);
            
        }
    }
    protected function chack_sign_up(){
        if(isset($_REQUEST["sign_up"])){
            if($_REQUEST["Terms"]=='on'){
                $_REQUEST["Terms"] = 1;
            };
            if($_REQUEST["user_pass"]==$_REQUEST["user_pass_2"]){
                unset($_REQUEST["user_pass_2"]);
                array_pop($_REQUEST);
                $this->print_stuf($_REQUEST);
                $this->add_account("account",$_REQUEST);
            }else{
                print_r("<h4> <center> Password Not Same </center> </h4> ");
            };
        }
    }
}
?>