<?php 

 class Activity {
    protected $id;  
    protected $type;
    protected $title;
    protected $description;
    protected $price;
    protected $availability;


    public function __construct($id,$type,$title, $description,$price, $availability)
    {
        $this->id = $id; 
        $this->type = $type;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->availability = $availability;

        
    }

    public function getDetails(){
        
    }

    public function addActivity() {


    }

    public function editActivity() {

        
    }


    public function deleteActivity() {

        
    }


    public function viewDetails() {

        
    }







 }



?>