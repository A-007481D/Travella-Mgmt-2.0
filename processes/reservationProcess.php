<?php require_once '../config/dbconfig.php';
session_start();
class Reservation extends User{
    public function __construct(){
        $this->conn = $this->connect();
    }
    public function insertReservation($id_client, $id_activite){
        $sql = "INSERT INTO reservation (id_client, id_activite) VALUES (:id_client, :id_activite)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id_client', $id_client);
        $stmt->bindParam(':id_activite', $id_activite);
        $result = $stmt->execute();
        if ($result) {
            echo "you can reserve";
        }
    }
}
?>
