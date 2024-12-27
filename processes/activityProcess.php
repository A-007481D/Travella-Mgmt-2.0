<?php 
require_once '../config/dbconfig.php';
class Activities extends Database{
    public function __construct(){
        $this->conn = $this->connect();
    }

    public function Addactivities($name, $image, $description, $price, $date_start, $date_fin, $places_desponsibles){
        $sql = "INSERT INTO activite (name, description, price, date_start, date_fin, places_desponsibles, img) VALUES (:name, :description, :price, :date_start, :date_fin, :places_desponsibles, :image)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':date_start', $date_start);
        $stmt->bindParam(':date_fin', $date_fin);
        $stmt->bindParam(':places_desponsibles', $places_desponsibles);
        $stmt->bindParam(':image', $image);
        $result = $stmt->execute();
        if ($result) {
            header("location: ../pages/superDashboard.php");
        }
    }

    public function AfficheActivities(){
        
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["activity_name"];
    $image = $_POST["activity_img"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $date_start = $_POST["date_start"];
    $date_fin = $_POST["date_fin"];
    $places_desponsibles = $_POST["available_places"];
    $activitiesInserted = new Activities();
    $activitiesInserted->Addactivities($name, $image, $description, $price, $date_start, $date_fin, $places_desponsibles);
}
?>
