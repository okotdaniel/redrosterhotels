<?php
class pdo_connect{
    //connection using pdo{php data objects} estension 
    private $conn;
    private $host;
    private $user;
    private $password;
    private $dbname;
//constructors for the database 
    function __construct(){
        $this->conn = false;
        $this->host ='localhost';
        $this->user = 'root';
        $this->password = '';
        $this->dbname = 'redroster';
        $this->connect();  
    }

//connecting to the database 
    function connect(){
        if(!$this->conn)
        try{
            $pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.'', $this->user, $this->password);
            
            echo"connected successfully to the database";
        }
        catch(PDOException $e){
            echo "connection failed ". $e->getMessage();

        }
    }

}
    $object = new pdo_connect();
     
?>