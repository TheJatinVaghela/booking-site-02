<?php
require_once("../model/model.php");
class login_controller extends model 
{ 
    
    public function __construct(){
        parent::__construct();
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
            // $this->print_stuf($_REQUEST);
            $answer = $this->chack_user_exist("account","user_mail",$_REQUEST["chack_user_mail"]);
            if($answer != false){
                if(isset($_SESSION["user_info"])){
                    unset($_SESSION["user_info"]);
                };
                $arr = array();
                foreach ($answer as $key => $value) {
                     $arr[$key]=$value;
                    
                }
                $_SESSION["user_info"]=$arr;
                // $this->print_stuf($arr);
                 header("Location:home");
            }else{
                $this->print_stuf("<h1>Incorect Info <a href='sign-up' style='text-decoration:underline; color: blue;'>sign-up</a></h1>") ;
            }
            
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
                // $this->print_stuf($_REQUEST);
                $answer = $this->chack_user_exist("account","user_mail",$_REQUEST["user_mail"]);
                if($answer == false){
                    $answer = $this->add_account("account",$_REQUEST);
                    if($answer == 1){
                        if(isset($_SESSION["user_info"])){
                            unset($_SESSION["user_info"]);
                        };
                        // $this->print_stuf($_SESSION["user_info"]);
                         $_SESSION["user_info"] = $_REQUEST;
                         header("Location:home");
                    }else if($answer == 0){
                        $this->print_stuf("There was an error creating the account");
                    }
                }else{
                    $this->print_stuf("<h1>mail alrady exits <a href='sign-in' style='text-decoration:underline; color: blue;'>sign-in</a></h1>") ;
                }
            }else{
                print_r("<h4> <center> Password Not Same </center> </h4> ");
            };
        }
    }
}
?>