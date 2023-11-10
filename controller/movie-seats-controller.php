<?php
require_once("../model/model.php");

class movie_steats_controller extends model
{
    public $user_info;
    public $data_info;
    public $date;
    public $seat_info;  
    public $datetime;

    public function __construct(){
        parent::__construct();
        $this->data_info = $this->get_all_data(["movie_list"=>"movie_list"]);
        $this->user_info = $this->already_had_user();
        $this->date = explode(",",$this->data_info[0]["dates"]);
        $this->print_stuf(explode(",",$this->get_data[0]["dates"])[0]);
        // $d = DateTime::createFromFormat ('Y-m-d H:i:s', $date[0]);
        // echo "Date:-";
        // $this->print_stuf( $d);
    }

    public function movie_steat_initialize(){
        if(!isset($_REQUEST["movie_id"])){
            $this->print_stuf(
                "<h2>no movie selected <a style='color:blue;' href='http://localhost/clones/booking-site-02/public/all-movies-list' >click here</a> to select a movie</h2>"
            );
            // return;
        };
        if(isset($_REQUEST["movie_id"])){
             $this->print_stuf($_REQUEST);
             $this->print_stuf($_REQUEST["last_page"]);
            // substr($date,0,1);
        };
        if(isset($_REQUEST["DATETIME"])){
            $this->datetime = $this->date[$_REQUEST['datetime']];
            $this->print_stuf($_REQUEST);
            $this->seat_info = $this->seat_check("seats",$this->datetime);
        }else{

            $this->seat_info = $this->seat_check("seats",null);
        }
        // $this->print_stuf($this->data_info[0]["dates"]) ;
        $this->user_header_footer_inbitwin("../view/site/movie-seats.php");
    }

    protected function user_header_footer_inbitwin($site){
        require_once("../view/site/header.php");
        require_once($site);
        require_once("../view/site/footer.php");
    }

}





?>