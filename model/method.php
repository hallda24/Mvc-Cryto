<?php 

    require_once("connectDB.php");

    class Medthod {

        public $DB;

        public function __construct() {
            $this->DB = new ConnectDB();
        }

        public function getTransection() {
            $result = $this->DB->QueryDB("SELECT * FROM transaction");
            return $result;
        }

        public function getAccount() {
            $result = $this->DB->QueryDB("SELECT * FROM account");
            return $result;
        }

        public function insertTransection($amount, $opperator) {
            if ($opperator == "BUY") {
                $result = $this->DB->Insert("INSERT INTO `transaction` (`id`, `btc`, `Satoshi`,`action`) VALUES (NULL, '$amount','0','$opperator')");
            }
            if ($opperator == "SELL") {
                $result = $this->DB->Insert("INSERT INTO `transaction` (`id`, `btc`, `Satoshi`,`action`) VALUES (NULL, '0','$amount','$opperator')");
            }
            return $result; 
        }

        public function increaseBtc($amount) {
            $result = $this->DB->Update("UPDATE `account` SET btc = btc + '$amount' WHERE id = 1");
            return $result; 
        }

        public function decreaseBtc($amount) {
            $result = $this->DB->Update("UPDATE `account` SET btc = btc - '$amount' WHERE id = 1");
            return $result; 
        }

        public function increaseSatoshi($amount) {
            $result = $this->DB->Update("UPDATE `account` SET Satoshi = Satoshi + '$amount' WHERE id = 1");
            return $result; 
        }

        public function decreaseSatoshi($amount) {
            $result = $this->DB->Update("UPDATE `account` SET Satoshi = Satoshi - '$amount' WHERE id = 1");
            return $result; 
        }

        public function checkBuy($satoshi) {
            $check = $this->DB->QueryDB("SELECT * FROM `account` WHERE id = 1");
            if ($check[0]['Satoshi'] >= $satoshi) {
                return true;
            } else {
                return false;
            }
            return false;
        }

        public function checkSell($btc) {
            $check = $this->DB->QueryDB("SELECT * FROM `account` WHERE id = 1");
            if ($check[0]['btc'] >= $btc) {
                return true;
            } else {
                return false;
            }
            return false;
        }
        
    }


?>