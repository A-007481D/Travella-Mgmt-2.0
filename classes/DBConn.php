<?php

class Database {
    private $host = "localhost";
    private $user = "root";     
    private $password = "abdelamlek";     
    private $dbname = "test_db";
    private $connection;         // Stores the database connection

    
     // Constructor: Automatically connects to the database when the class is instantiated.
    
    public function __construct() {
        $this->connect();
    }

    
     // Connects to the database using PDO and stores the connection.

    private function connect() {
        $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=utf8mb4";
        try {
            $this->connection = new PDO($dsn, $this->user, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }


     // Runs a generic SQL query and returns the statement object.
     // @param string $sql - The SQL query to execute.
     // @param array $params - Optional parameters for prepared statements.
     // @return PDOStatement|false - The statement object or false on failure.
   
    public function query($sql, $params = []) {
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }

    /*
     * Inserts data into a table.
     // @param string $table - The table name.
     // @param array $data - An associative array of column => value pairs.
     // @return bool - True if successful, false otherwise.
     */
    public function insert($table, $data) {
        $columns = implode(", ", array_keys($data));
        $placeholders = implode(", ", array_map(fn($col) => ":$col", array_keys($data)));

        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        return $this->query($sql, $data);
    }

    /**
     * Fetches all rows from a query result.
     // @param string $sql - The SELECT query to execute.
     // @param array $params - Optional parameters for prepared statements.
     //@return array - An array of results.
     */
    public function fetchAll($sql, $params = []) {
        $stmt = $this->query($sql, $params);
        return $stmt ? $stmt->fetchAll(PDO::FETCH_ASSOC) : [];
    }

    /**
     * Fetches a single row from a query result.
     // @param string $sql - The SELECT query to execute.
     // @param array $params - Optional parameters for prepared statements.
     //@return array|null - An associative array of the row or null if not found.
     */
    public function fetchOne($sql, $params = []) {
        $stmt = $this->query($sql, $params);
        return $stmt ? $stmt->fetch(PDO::FETCH_ASSOC) : null;
    }


    // Closes the database connection when the object is destroyed.
  
    public function __destruct() {
        $this->connection = null;
    }
}

// Example usage:

// Step 1: Instantiate the Database class (Ensure to replace database details above)
$db = new Database();

// Step 2: Insert data into the 'users' table (REPLACE 'users' with your table name and key-value pairs with your data)
$db->insert("users", [
    "name" => "John Doe", // REPLACE with actual name
    "email" => "john@example.com" // REPLACE with actual email
]);

// Step 3: Fetch all data from the 'users' table (REPLACE query as needed)
$users = $db->fetchAll("SELECT * FROM users");
print_r($users); // Outputs all user records

// Step 4: Fetch a single user record (REPLACE query as needed)
$user = $db->fetchOne("SELECT * FROM users WHERE id = :id", ["id" => 1]); // Replace '1' with actual ID
print_r($user); // Outputs the user record

?>
