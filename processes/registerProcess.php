<?php
require_once '../config/dbconfig.php';
class User extends Database {
    public function __construct()
    {
        $this->conn = $this->connect();
    }

    public function registerdata($name, $prenom, $email, $number, $password){
        $sql = "INSERT INTO client (first_name, last_name, email, number, password) VALUES (:name, :prenom, :email, :number, :password)";
        $stmt = $this->conn->prepare($sql);
        $hashpassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':number', $number);
        $stmt->bindParam(':password', $hashpassword);
        $stmt->execute();
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = $_POST["password"];

    $registre = new User();
    $registre->registerdata($name, $prenom, $email, $number, $password);
}
 ?>