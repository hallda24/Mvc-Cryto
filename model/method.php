<?php 

    require_once("connectDB.php");

    class Medthod {

        public $DB;

        public function __construct() {
            $this->DB = new ConnectDB();
        }

        public function SelectDB() {
        $result = $this->DB->QueryDB("SELECT * FROM assignment");
        return $result;
    }

    }

?>