<?php 
require_once '../config/dbconfig.php'; 

require_once '../classes/Client.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password)) {
        $client = new Client(null, $first_name,$last_name,$email,$password);
        $db = $conn->connect();
        echo $client->register($db);

        } else {
            echo "All fill all the  fields.";
        }

    }



if ($_SERVER['REQUEST_METHOD']=== 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        $client = new Client(null, null, null, $email, $password);
        $db = $conn->connect();
        echo $client->login($db);

    } else {
        echo "Email and password are required.";
    }
}


?>

