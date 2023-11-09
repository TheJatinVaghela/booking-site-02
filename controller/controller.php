<?php
require_once("../model/model.php");
require_once("../controller/login-controller.php");
require_once("../controller/user-controller.php");
require_once("../controller/movie-seats-controller.php");
class controller extends model 
{   
    public $user_info;
    public $data_info;
    public function __construct(){
         parent::__construct();
        // $this->print_stuf($_SERVER);
        $this->data_info = $this->get_all_data(["movie_list"=>"movie_list"]);
        $this->site_initialize();
    }
    
    protected function site_initialize(){
        if(isset($_COOKIE["user_info"])){
            if($_COOKIE["user_info"] != "0"){
                $answer = $this->chack_user_exist("account","u_id",$_COOKIE["user_info"]);
                $this->user_info = $answer;
            }
        };
        if($_SERVER["PATH_INFO"] == "/home"){
            
            // $this->print_stuf($this->data_info);
            $this->header_footer_inbitwin("../view/site/home.php");
        }
        else if(($_SERVER["PATH_INFO"] == ('/sign-in'))||($_SERVER["PATH_INFO"] == ('/sign-up'))){
            $login = new login_controller();
            $login->login_site_initialize();
           
        }
        else if($_SERVER["PATH_INFO"] == "/movie-seats"){
            $movie_steats = new movie_steats_controller();
            $movie_steats->movie_steat_initialize();
        }
        else if($_SERVER["PATH_INFO"] == "/all-movies-list"){
            $this->header_footer_inbitwin("../view/site/all-movies-list.php");
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