<?php

class model 
{
    protected $connection;
    protected $get_data;
    public $assets = "http://localhost/clones\booking-site-02\public\assets/"; 
    public function __construct(){

        $hostname="localhost";
        $directri = "root";
        $data_base = "booking-2";
        $password = "";
        $this->connect_to_server($hostname,$directri,$data_base,$password);
        // $this->seat_add();
    }

   protected function connect_to_server($hostname = "localhost", $directri = "root", $data_base = "booking-2" ,$password = "" ){
        try {
            $new_connection = new mysqli($hostname,$directri,$password,$data_base);
            $this->connection = $new_connection;
            return $new_connection;
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
      if($answer != false){
        $arr = array();
        foreach ($answer as $key => $value) {
            $arr[$key]=$value;
        };
        return $arr;
    }
   }
   public function print_stuf($stuf){
    echo "<pre>";
    print_r($stuf);
    echo "</pre>";
   }

   public function jatin_fetch_object($sqlex){
        $data = array();
        $arr = array();
        while ($a = $sqlex->fetch_object()) {
            foreach ($a as $key => $value) {
                $arr[$key]=$value;
            };
            array_push($data, $arr);
        };
        return $data;
   }

   protected function get_all_data($table_names_array){
   
        foreach($table_names_array as $key => $value){
            $sql = "select * from $value";
            $sqlex = $this->connection->query($sql);
            // $answer = ($sqlex->num_rows > 0)? $sqlex->fetch_all() : false;
            if($sqlex->num_rows > 0){
                $data = $this->jatin_fetch_object($sqlex);
                // $this->print_stuf($data);
                // exit();
            }
        }
        $this->get_data = $data;
    return $data;
   }

   protected function already_had_user(){
    if(isset($_COOKIE["user_info"])){
        if($_COOKIE["user_info"] != "0"){
            $answer = $this->chack_user_exist("account","u_id",$_COOKIE["user_info"]);
           return $answer;
        }
    };
   }

   protected function seat_add(){
    $arr = ['G-0','G-1','G-2','G-3','G-4','G-5','G-6','G-7','G-8','G-9','G-1','G-1','G-1','G-1','F-0','F-1','F-2','F-3','F-4','F-5','F-6','F-7','F-8',
            'F-9','F-1','F-1','F-1','F-1','E-0','E-1','E-2','E-3','E-4','E-5','D-0','D-1','D-2','D-3','D-4','D-5','D-6','D-7','C-0','C-1','C-2','C-3',
            'C-4','C-5','C-6','C-7','C-8','B-0','B-1','B-2','B-3','B-4','B-5','B-6','B-7','B-8','A-1','A-2','A-3','A-4','A-5','A-6','A-7','A-8' ];
   
    $sql = "INSERT INTO seats (seat) VALUES (";
    foreach ($arr as $key => $value) {
        $sql .= "'$value'), (";
    };
    $this->print_stuf($sql);
    }

    protected function seat_check($table , $key){
        if($key === "" || $key === null){
            $this->print_stuf("MODEL");
            $key =  explode(",",$this->get_data[0]["dates"])[0];
        };
        $key = trim($key);
        $this->print_stuf($key);
        $sql = "SELECT `seat`,`$key` FROM $table WHERE `$key`= 1"; // ( ` ) = 🟢 | ( ' ) = 🔴
        $this->print_stuf($sql);
        // exit();
        $sqlex = $this->connection->query($sql);
         $this->print_stuf($sqlex);
        if ($sqlex->num_rows > 0) {
            $data = $this->jatin_fetch_object($sqlex);
             $this->print_stuf($data);
             return $data; 
        };
        return "No"; 
    }

    protected function chack_seat_empty($table,$key,$seat_arr){
        $datetime_name = $key;
        $sql = "SELECT `seat`,`$key` FROM $table WHERE `$key`= 1"; // ( ` ) = 🟢 | ( ' ) = 🔴
        $sqlex = $this->connection->query($sql);
         $this->print_stuf($sqlex);
        //   exit();
        if ($sqlex->num_rows > 0) {
            $data = $sqlex->fetch_all();
            $arr=false;
            foreach($data as $key => $value){
                if(isset($seat_arr[$value[0]]) && $seat_arr[$value[0]] == 'yes'){
                    $this->print_stuf($seat_arr['G-0']);
                      echo "0";
                      $arr=true;
                    //  exit();
                    return false; 
                }
            };
            $sql = "UPDATE `$table` SET `$datetime_name`= 1 WHERE `seat`IN (";
            foreach ($seat_arr as $key => $value) {
                // UPDATE `seats` SET `2023-09-09 09:30:00` = '1' WHERE `seat`IN ('G-5','G-6');
                $sql.="'$key',";
            };
            $sql = substr($sql,0,-1);
            $sql .= ");";
            $sqlex = $this->connection->query($sql);
            $this->print_stuf($sqlex);
            if ($sqlex == 1) {
                echo "1";
                    // exit();
                    return true;
            };
        }else{
            $sql = "UPDATE `$table` SET `$datetime_name`= 1 WHERE `seat`IN (";
            foreach ($seat_arr as $key => $value) {
                // UPDATE `seats` SET `2023-09-09 09:30:00` = '1' WHERE `seat`IN ('G-5','G-6');
                $sql.="'$key',";
            };
            $sql = substr($sql,0,-1);
            $sql .= ");";
            $sqlex = $this->connection->query($sql);
            $this->print_stuf($sqlex);
            if ($sqlex == 1) {
                echo "1";
                    // exit();
                    return true;
            };
        }
        // return $arr; 
        //  return $data; 
        
        
    }
    protected function chack_movie_id_datetime($table,$movie_id,$datetime){
        //movie_id and datetime chacking
        $sql = "SELECT * FROM $table WHERE `movie_id` = $movie_id";
        $sqlex = $this->connection->query($sql);
        if($sqlex->num_rows > 0) {
            $data = $sqlex->fetch_object();
            $date_arr = explode(",",$data->dates);
            $this->print_stuf($date_arr);
            return ["movie_id"=>$movie_id,"datetime_value"=>$date_arr[$datetime],"datetime_key"=>$datetime];
        };
        return false;
    }
    protected function Add_chack_bookedseat_toUser($table,$_1key,$_2key,$movie_id,$datetime,$seat_chacked_arr){
         $sql = "SELECT $_1key FROM $table where $_2key = $_COOKIE[user_info]";
         $this->print_stuf([$_COOKIE["user_info"],$table,$_1key,$_2key,$movie_id,$datetime,$seat_chacked_arr]);
         $sqlex = $this->connection->query($sql);
         if($sqlex->num_rows > 0){
            $data = $sqlex->fetch_object();
            $pre_query = $data->bookedseat;

             $data = explode(",",$data->bookedseat);
             $pre_movie_id = ltrim($data[0],"("); 
            //  $this->print_stuf($pre_movie_id);
             $pre_datetime = $data[1];
            //  $this->print_stuf($pre_datetime);
            //  $this->print_stuf($data[2]);
             $pre_bockedSeat = rtrim($data[2],")");
             $pre_bockedSeat = explode("=>",$pre_bockedSeat);
             $pre_bockedSeat = ltrim($pre_bockedSeat[1],"[");
             $pre_bockedSeat = rtrim($pre_bockedSeat,"]");
            //  $this->print_stuf($pre_bockedSeat);
              $this->print_stuf($pre_query);
         }
         if($movie_id == $pre_movie_id && $datetime == $pre_datetime){
            $pre_bockedSeat = $pre_bockedSeat;
            $pre_query = "";
         }else{
            $pre_bockedSeat ="";
            $pre_query = $pre_query;
         }
        //  exit();
        $sql = "UPDATE $table SET `$_1key` = '$pre_query($movie_id,$datetime,chacked_seats=>[";
        $sql .= $pre_bockedSeat;
        foreach ($seat_chacked_arr as $arr_key => $arr_value) {
            $sql.=$arr_key.'/' ;

        };
        // $this->print_stuf($sql);
        $sql .= "]";
        //  $sql =substr($sql,0,-1);
        $sql.="),' WHERE `$_2key` = 3";
        $this->print_stuf($sql);
        // exit();
        $sqlex = $this->connection->query($sql);
        if($sqlex == 1){
            header("Location: http://localhost/clones/booking-site-02/public/home");
        }
    }

}



?>