<?php 
    require_once("model/connectDB.php");

    class Controller {
        public $control;

        function __construct() {
            $this->control = new ConnectDB();
        }

        function run() {
            $data = $this->control->SelectDB();
            
            require_once("view/index_view.php");
        }
    }

?>