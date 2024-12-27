<?php 

require_once './User.php';


class Client extends User {
    public function __construct($id, $first_name, $last_name, $email, $password) {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->role = 'client';
    }

    public function register($db)
    {
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (first_name, last_name, email, password, role) VALUES (:first_name, :last_name, :email, :password, :role)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':first_name', $this->first_name);
        $stmt->bindParam(':last_name', $this->last_name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':role', $this->role);

        if ($stmt->execute()) {
            return "User registered successfully.";
        } else {
            return "Error: Could not register user.";
        }
    }



    public function login($db) {
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':email', $this->email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($this->password,$user['password'])) {
            session_start();
            $_SESSION['id_client'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            return "Login successful";
        }else {
            return "Error : invalid email or password ";
        }

    }

 

public function logout(){
    session_start();
    session_destroy();
    return "Logged out Successfully.";
}



public function viewActivites(){
  

}

public function reserveActivity(){
   

}

public function modifyReservation(){
    
}


public function cancelReservation() {

}




}



?>