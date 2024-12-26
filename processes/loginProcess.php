<?php require_once '../config/dbconfig.php';
class login extends Database{
    public function __construct()
    {
        $this->conn = $this->connect();
    }
}

?>