<?php
    class SuperAdmin extends Admin {

        public function __construct($id, $first_name, $last_name, $email, $password)
        {
            $this->id = $id;
            $this->first_name = $first_name;
            $this->last_name = $last_name; 
            $this->email = $email;
            $this->password = $password;
            $this->role = 'super admin';
        }


        public function assignAdmin() {

        }

        public function demoteAdmin(){
            
        }







}



?>