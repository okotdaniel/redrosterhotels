<?php 
class db_connect{
    private $host;
    private $user;
    private $password;
    private $dbname;
    private $conn;
    

    function __construct(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->dbname ='redroster';
        $this->conn = false;
        
    }

    function connect(){
        if(!$this->conn){
            try{
                $pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.'',$this->user, $this->password);
                
                echo "connected ";

            }
            catch(PDOException $e){
                echo "connection failed" ;
            }
            return $this->conn;
        }
    }
}

$object = new db_connect();
 $object->connect();
?>