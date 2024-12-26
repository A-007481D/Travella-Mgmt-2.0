<?php
session_start();
require_once '../config/dbconfig.php';
class User extends Database {
    public function __construct()
    {
        $this->conn = $this->connect();
    }

    public function Registerdata($name, $prenom, $email, $number, $password){
        $sql = "INSERT INTO client (first_name, last_name, email, number, password) VALUES (:name, :prenom, :email, :number, :password)";
        $stmt = $this->conn->prepare($sql);
        $hashpassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':number', $number);
        $stmt->bindParam(':password', $hashpassword);
        $result = $stmt->execute();
        if ($result) {
            header("location: ../pages/login.php");
        }

    }

    public function Login($email, $password){
        $sql = "SELECT * FROM client WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            if (password_verify($password, $result["password"])) {
                $_SESSION["client_email"] = $result["email"];
                $_SESSION["client_password"] = $result["password"];
                if ($email === 'admin@gmail.com') {
                    $_SESSION["admin"] = true;
                    header("location: ../index.php");
                }else {
                    $_SESSION["admin"] = false;
                    header("location: ../index.php");
                }
            }
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = $_POST["password"];
    $password_login = $_POST["password_login"];
    $email_login = $_POST["email_login"];

    if (isset($name, $prenom, $email, $number, $password)) {
        $registre = new User();
        $registre->Registerdata($name, $prenom, $email, $number, $password);
    }
    if (isset($email_login, $password_login)) {
        $registre = new User();
        $registre->Login($email_login, $password_login);
    }
}
 ?>