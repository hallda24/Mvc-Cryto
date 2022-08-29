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

    public function Insert($sql){
        if ($this->conn->query($sql) === TRUE) {
            // echo "New record created successfully";
            $last_id = $this->conn->insert_id;
            return $last_id;
            } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            return false;
            }
    }

    public function Update($sql){
            if ($this->conn->query($sql) === TRUE) {
                // echo "New record created successfully";
                return true;
              } else {
                echo "Error: " . $sql . "<br>" . $this->conn->error;
                return false;
              }
        }
}

?>