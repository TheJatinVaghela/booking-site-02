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
           echo $th->getMessage();
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
    //    $this->print_stuf($sql);
        $sqlex = $this->connection->query($sql);
        return $sqlex;
   }
   
   public function delete($table , $key , $data){
    $sql = "delete from $table where $key = $data";
    $sqlex = $this->connection->query($sql);
    return $sqlex;
   }

   protected function chack_user_exist($table,$key,$mail){
      $sqlex = "SELECT * FROM $table WHERE $key = '$mail'";
      $sql = $this->connection->query($sqlex);
      $answer = ($sql->num_rows > 0)? $sql->fetch_object() : false;
      return $answer;
   }
   public function print_stuf($stuf){
    echo "<pre>";
    print_r($stuf);
    echo "</pre>";
   }
}


?>