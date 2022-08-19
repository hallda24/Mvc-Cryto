<?php 

class ConnectDB {

    public $conn;

    public function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $databasename = "mvc";

        $this->conn = new mysqli($servername, $username, $password, $databasename);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        echo "Connected successfully";
        
    }

    public function QueryDB($sql) {

        $querySql = $this->conn->query($sql);
        $store = array();

        if (!$querySql) {
            trigger_error('Invalid query: ' . $this->conn->error);
        }

        if ($querySql->num_rows > 0) {

            while($row = $querySql->fetch_assoc()) {
            
                $store[] = $row;

            }
            
            return $store;

        } else {

            return null;
        }
    }

    public function SelectDB() {
        $result = $this->QueryDB("SELECT * FROM assignment");
    return $result;
    }

    public function InsertDB() {
        
    }
    

}

?>