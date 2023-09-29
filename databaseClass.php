<?php
class databaseConnect{
    public $host ="127.0.0.1:3307";
    public $username ="root";
    public $password="";
    public $dbname="myDatabase";
    public $pdo;

    function __construct(){
        try{
           $this->pdo = new PDO("mysql:host=$this->host; dbname=$this->dbname" , $this->username, $this->password); 
           $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOEXception $e) {
            die("Database connection Failed: " . $e->getMessage());
        } 
    }
    function getConnection() {
        return $this->pdo;
    }
}
?>