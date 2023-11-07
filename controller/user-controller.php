<?php 
require_once("../model/model.php");
class user_controller extends model
{
     public $user_info;

    public function __construct(){
        parent::__construct();
        if(isset($_SESSION["user_info"])){
            $this->user_info = $_SESSION["user_info"];
       }
    }

    public function user_site_initialize(){
        if(isset($_REQUEST["delete_ac"])){
            $this->print_stuf($this->user_info);
            $answer = $this->delete("account","u_id",$this->user_info["u_id"]);
            //  $this->print_stuf($answer);
             if($answer == 1){
                header("Location:http://localhost/clones/booking-site-02/public/sign-up");
             }else{
                echo "error: " . $answer ."";
             }
        };
        if(isset($_REQUEST["log_out"])){
            if(isset($_SESSION["user_info"])){
                unset($_SESSION["user_info"]);
                header("Location:http://localhost/clones/booking-site-02/public/sign-in");
            }
        };
        $user_name = explode('/',$_SERVER["REQUEST_URI"]);
        $user_name = $user_name[count($user_name)-1];
        if($this->user_info["user_name"] == $user_name){
            $this->user_header_footer_inbitwin("../view/site/user-page.php");
        }else{
        
            $answer = $this->chack_user_exist("account","user_name",$user_name);
            if($answer != false){
                $arr = array();
                foreach ($answer as $key => $value) {
                     $arr[$key]=$value;
                    
                }
                $_SESSION["user_info"]=$arr;
                $this->user_header_footer_inbitwin("../view/site/user-page.php");
            }else{
               require_once("../view/site/no-page.php");
              
            }
           
        }
    }

    protected function user_header_footer_inbitwin($site){
        require_once("../view/site/header.php");
        require_once($site);
        require_once("../view/site/footer.php");
    }

}


?> 