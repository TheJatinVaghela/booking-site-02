<?php

class model 
{
    private $connection;
    public $assets = "http://localhost/clones\booking-site-02\public\assets/"; 
    public function __construct(){

        $hostname="localhost";
        $directri = "root";
        $data_base = "booking-2";
        $password = "";
        try {
            $this->connection = new mysqli($hostname,$directri,$password,$data_base);
        } catch (\Throwable $th) {
           
        }
    }

   protected function add_account($table , $data){
        $sql = "INSERT INTO $table (";
        foreach($data as $key => $value){
            $sql .= $key .','; 
        };
        $sql = substr($sql,0,-1);
        $sql .= ") VALUES (";
        foreach ($data as $key => $value) {
            $sql .= '"'.$value.'" ' . ',';
        };
       $sql = substr($sql ,0 ,-1);
       $sql .= ')';
       $this->print_stuf($sql);
   }
   
   protected function chack_user_exist($table,$mail){
      $sql = "SELECT * FROM $table WHERE user_mail = $mail";
      $sqlex = $this->connection->query($sql);
      $answer = ($sqlex > 0)? true : false;
      return $answer;
   }
   public function print_stuf($stuf){
    echo "<pre>";
    print_r($stuf);
    echo "</pre>";
   }
}


?>