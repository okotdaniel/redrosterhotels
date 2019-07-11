<?php 

class dbconnect{
    private $conn;
    private $host;
    private $user;
    private $password;
    private $dbname;

    function __construct(){
        $this->conn = false;
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->dbname ='redroster';
    }
    function connect(){
        if(!$this->conn){
            try{
                $pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.'',$this->user, $this->password);
                echo 'connection sucessfull';
            }
            catch(PDOException $e){
                echo 'connection failed' . $e->getMessage();
            }
        }
    }
}


?>