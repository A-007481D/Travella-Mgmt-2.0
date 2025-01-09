<?php 

class Reservation {
    public $id; 
    public $clientID;
    public $activityID;
    public $status; 


    public function __construct($id, $clientID, $activityID, $status)
    {
        $this->id = $id;
        $this->clientID = $clientID;
        $this->activityID = $activityID;
        $this->status = $status;
    }

    public function confirmReservation(){

    }



    public function rejectReservation() {
        
    }


}


?>