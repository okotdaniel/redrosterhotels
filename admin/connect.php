<?php
class Db_con{
    private $conn;
    private $host;
    private $user;
    private $pass;
    private $dbname;

    function __construct(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass= = '';
        $this->dbname = 'pdo_crud';

    }
    function connect(){
        if($this->conn){
            try{
                $pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.'', $this->user, $this->pass );
                echo 'connection successfull ';

            }
            catch(PDOException $e){
                echo 'connection to the server failed ';
            }
        }
    }
}

$object = new Db_con();
$object->connect();

?>
