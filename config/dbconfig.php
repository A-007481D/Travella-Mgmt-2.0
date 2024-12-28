<?php
class Database {
    private $host = "localhost";
    private $dbname = "voyage_v2";
    private $servername = "root";
    private $pass = "abdelmalek";
    protected $conn;
    public function connect() {
        try{
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->servername, $this->pass);
            return $this->conn;
        }
        catch(PDOException $e){
            echo 'err :' . $e->getMessage();
        }
    }
}
$conn = new Database();
$conn->connect();
?>