<?php
  session_start();

  class Database{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db_name = 'travel_tour';
    public $mysqli_obj;

    public function __construct(){
      $this->mysqli_obj = new mysqli($this->servername,$this->username,$this->password,$this->db_name);

      if($this->mysqli_obj->connect_error){
          die('ERROR'.$this->mysqli_obj->connect_error);
      }else{
          return $this->mysqli_obj;
      }
    }
  }

?>