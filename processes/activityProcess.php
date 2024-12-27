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

    public function AfficheActivities($client_id){
        $sql = "SELECT * FROM activite";
        $stmt  = $this->conn->prepare($sql);
        $stmt->execute();
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '
            <div class="group rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="relative">
                    <img src="' . $result["img"] . '" alt="Mountain Biking" class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-300" />
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full">
                        <span class="text-blue-600 font-semibold">' . $result["price"] . '/person</span>
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">' . $result["name"] . '</h3>
                            <p class="text-gray-500">' . $result["description"] . '</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 text-sm text-gray-500 mb-4">
                        <span>⏰ ' . $result["date_start"] . ' - ' . $result["date_fin"] . '</span>
                        <span>👥 Max ' . $result["places_desponsibles"] . ' people</span>
                        <span class="text-yellow-400">★★★★★</span>
                    </div>
                    <p class="text-gray-600 mb-6">' . $result["description"] . '</p>
                    <div class="flex gap-3">
                    <form method="POST" action="../processes/activityProcess.php">
                        <input name = "id_activities" type="hidden" value="'.$result["id_activite"].'">
                        <input name = "id_client" type="hidden" value="'. $client_id .'">
                        <button type="submit" class="flex-1 bg-blue-600 text-white w-[5rem] py-2.5 rounded-xl hover:bg-blue-700 transition-colors">
                            Book Now
                        </button>
                    </form>
                        <button class="px-4 py-2.5 border border-blue-600 text-blue-600 rounded-xl hover:bg-blue-50 transition-colors">
                            Details
                        </button>
                    </div>
                </div>
            </div>';
        }
    }
    public function AddReservation($id_client, $id_activities){
        $sql = "INSERT INTO reservation (id_client, id_activite) VALUES (:id_client, :id_activities)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id_client', $id_client);
        $stmt->bindParam(':id_activities', $id_activities);
        $stmt->execute();
        header("location: ../pages/activities.php");
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
    $id_act = $_POST["id_activities"];
    $id_cl = $_POST["id_client"];
    if (isset($name, $image, $description, $price, $date_start, $date_fin, $places_desponsibles)){
        $activitiesInserted = new Activities();
        $activitiesInserted->Addactivities($name, $image, $description, $price, $date_start, $date_fin, $places_desponsibles);
    }
    if (isset($id_cl, $id_act)) {
        $addreservation = new Activities();
        $addreservation->AddReservation($id_cl, $id_act);
    }

}
?>
