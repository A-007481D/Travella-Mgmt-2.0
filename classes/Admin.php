<?php

require_once './User.php';



class Admin extends User {
    public function __construct($id, $first_name, $last_name, $email, $password) {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->role = 'admin';
    }


    public function editUserProfile() { // to remove
        
    }


    public function archiveUser() {
        
    }

    public function banUser() {
        
    }


    




}




?>