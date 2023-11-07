<?php 
require_once("../model/model.php");
class user_controller extends model
{

    public function __construct(){
        parent::__construct();
    }

    public function user_site_initialize(){
        if(isset($_REQUEST["log_out"])){
            $this->print_stuf($_SESSION["user_info"]);
            $answer = $this->delete("account","u_id",$_SESSION["user_info"]->u_id);
            $this->print_stuf($answer);
        }
        $user_name = explode('/',$_SERVER["REQUEST_URI"]);
        $user_name = $user_name[count($user_name)-1];
        if($_SESSION["user_info"]->user_name == $user_name){
            $this->user_header_footer_inbitwin("../view/site/user-page.php");
        }else{
        
            $answer = $this->chack_user_exist("account","user_name",$user_name);
            if($answer != false){
                $_SESSION["user_info"] = $answer;
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