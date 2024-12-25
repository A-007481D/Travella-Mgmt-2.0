<?php
$dsn = "mysql:host=localhost;dbname:voyage_v2";
$user = "root";
$pass = "";

try{
    $db= new PDO($dsn, $user, $pass);
    echo "you are connected littel bitch";
}catch (PDOException $e){
    echo "failed" . $e -> getMessage();
}
?>