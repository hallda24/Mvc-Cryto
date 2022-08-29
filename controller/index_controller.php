<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="model/Jquery.js" language="javascript"></script>
<script src="model/Ajax_refresh.js" language="javascript"></script>
<?php

    require_once("model/method.php");

    class Controller {

        public $control;
        
        function __construct() {
            $this->control = new Medthod();
        }

        function run() {

            $acc = $this->control->getAccount();
            $tran = $this->control->getTransection();
            require_once("view/index_view.php");
        }

    }

?>