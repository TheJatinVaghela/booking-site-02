<?php
require_once("../model/model.php");

class movie_steats_controller extends model
{

    public function __construct(){
        parent::__construct();


    }

    public function movie_steat_initialize(){
        if(isset($_REQUEST["movie_id"])){
            $this->print_stuf($_REQUEST);
        };
        
    }

}





?>