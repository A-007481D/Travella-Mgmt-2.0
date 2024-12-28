<?php require_once '../config/dbconfig.php';
class UserP extends Database{
    public function __construct()
    {
        $this->conn = $this->connect();
    }

    public function AfficheClient(){
        $sql = "SELECT * FROM client";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr class='border-b'>
                                    <td class='p-4'>". $result["id_client"] ."</td>
                                    <td class='p-4'>". $result["first_name"] ."</td>
                                    <td class='p-4'>". $result["last_name"] ."</td>
                                    <td class='p-4'>". $result["email"] ."</td>
                                    <td class='p-4'>". $result["number"] ."</td>
                                    <td class='p-4 space-x-2'>
                                        <button class='px-3 py-1 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 transition-colors'>
                                            Archive
                                        </button>
                                        <button class='px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition-colors'>
                                            Ban
                                        </button>
                                        <button class='px-3 py-1 border border-gray-300 text-gray-700 rounded hover:bg-gray-50 transition-colors'>
                                            Promote
                                        </button>
                                    </td>
                                </tr>";
        }
    }
}
?>