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