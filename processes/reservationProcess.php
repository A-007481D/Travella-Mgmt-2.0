<?php require_once '../config/dbconfig.php';
session_start();
class Reservation extends Database{
    public function __construct(){
        $this->conn = $this->connect();
    }
    public function AddReservation($id_client, $id_activities){
        $sql = "INSERT INTO reservation (id_client, id_activite) VALUES (:id_client, :id_activities)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id_client', $id_client);
        $stmt->bindParam(':id_activities', $id_activities);
        $stmt->execute();
        header("location: ../pages/activities.php");
    }

    public function AfficheReservation(){
        $sql = "SELECT 
                    reservation.id_reservation, 
                    activite.name AS activity_name, 
                    activite.date_start, 
                    activite.date_fin, 
                    activite.price, 
                    reservation.status 
                FROM 
                    reservation
                INNER JOIN 
                    activite ON reservation.id_activite = activite.id_activite";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        
        while ($res = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr class='border-b hover:bg-gray-50'>
                    <td class='p-4'>" . $res['id_reservation'] . "</td>
                    <td class='p-4'>" . $res['activity_name'] . "</td>
                    <td class='p-4'>" . $res['date_start'] . "</td>
                    <td class='p-4'>" . $res['date_fin'] . "</td>
                    <td class='p-4'>$" . number_format($res['price'], 2) . "</td>
                    <td class='p-4'>
                        <span class='px-2 py-1 bg-green-100 text-green-800 rounded-full text-sm'>
                            " . $res['status'] . "
                        </span>
                    </td>
                    <td class='p-4 space-x-2'>
                        <button class='px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors'>
                            View Details
                        </button>
                        <button class='px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition-colors'>
                            Cancel
                        </button>
                    </td>
                </tr>";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id_act = $_POST["id_activities"];
    $id_cl = $_POST["id_client"];
    if (isset($id_cl, $id_act)) {
        $addreservation = new Reservation();
        $addreservation->AddReservation($id_cl, $id_act);
    }

}
?>
