<?php
require_once("../model/model.php");

class movie_steats_controller extends model
{
    public $user_info;
    public $data_info;
    public $date;
    public $seat_info;  
    public $datetime;
    public $last_page;
    public $movie_id;
    public function __construct(){
        parent::__construct();
        $this->data_info = $this->get_all_data(["movie_list"=>"movie_list"]);
        $this->user_info = $this->already_had_user();
        // $this->date = explode(",",$this->data_info[0]["dates"]);
        // $this->print_stuf(explode(",",$this->get_data[0]["dates"])[0]);
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
            //  $this->print_stuf($_REQUEST);
             $this->date = explode(",",$this->chack_user_exist("movie_list","movie_id",$_REQUEST["movie_id"])["dates"]);
             $this->datetime = $this->date[0];
             $this->seat_info = $this->seat_check("seats",$this->date[0]);
             $this->print_stuf("in this->date");
             $this->print_stuf($this->date);
             $this->print_stuf("in this->seat_info");
             $this->print_stuf($this->seat_info);
             if($this->date != ""){
                 
                //  $this->print_stuf("Date-yes");
                }else{
                // $this->print_stuf("Date-no");

            }
            //  $this->print_stuf($_REQUEST["last_page"]);
            // substr($date,0,1);
        };
        if(isset($_REQUEST["DATETIME"])){
            $this->datetime = $this->date[$_REQUEST['datetime']];
            // $this->print_stuf($_REQUEST);
            $this->seat_info = $this->seat_check("seats",$this->datetime);
         }
        //else{

        //     $this->seat_info = $this->seat_check("seats",null);
        // };
        if(isset($_REQUEST["proceed"])){
             $this->print_stuf($_REQUEST);
             $seat_selected_arr = array();
             $this->last_page = $_REQUEST['last_page'];
             $this->movie_id = $_REQUEST["movie_id"];
             $datetime = $_REQUEST["datetime"];
             array_shift($_REQUEST);
             array_shift($_REQUEST);
             array_shift($_REQUEST);
             array_pop($_REQUEST);
             $seat_selected_arr = $_REQUEST;
             $new_connection = $this->connect_to_server();
            //  $this->print_stuf([$new_connection,$this->connection]);
            $chack_movie_datetime_answer = $this->chack_movie_id_datetime("movie_list",$this->movie_id,$datetime);
              if($chack_movie_datetime_answer !== false){
                 $this->print_stuf($chack_movie_datetime_answer);
                 $chack_seat_empty_answer = $this->chack_seat_empty("seats",$chack_movie_datetime_answer["datetime_value"],$seat_selected_arr);
                 $this->print_stuf($chack_seat_empty_answer);
                //  exit(); 
                 if($chack_seat_empty_answer !== false){
                     $this->Add_chack_bookedseat_toUser("account","bookedseat","u_id",$this->movie_id,$datetime,$seat_selected_arr);
                 }else if($chack_seat_empty_answer == false){

                    $this->print_stuf([$_REQUEST,"seat teken"]);
                 }  
              }
            //  $this->Add_chack_bookedseat_toUser("account","bookedseat","u_id",$movie_id,$datetime,$seat_selected_arr);
        }
        // $this->print_stuf($this->data_info[0]["dates"]) ;
            $this->print_stuf("in this->seat_info -2");
             $this->print_stuf($this->seat_info);
        $this->user_header_footer_inbitwin("../view/site/movie-seats.php");
    }

    protected function user_header_footer_inbitwin($site){
        require_once("../view/site/header.php");
        require_once($site);
        require_once("../view/site/footer.php");
    }

}





?>