<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="model/Jquery.js" language="javascript"></script> -->
<head>
  <script src="model/Jquery.js" language="javascript"></script>
  <script src="model/sweetalert2.all.min.js" language="javascript"></script>
</head>

<?php

    require_once("model/method.php");

    class treade_Controller {

        public $control;
        
        function __construct() {
            $this->control = new Medthod();
        }

        function run() {

            if (isset($_POST['buy'])) {
                
                //Check satoshi for buy btc 
                if ($this->control->checkBuy($_POST['buy'] * 1000.00)) {

                    //Process Transection
                    $this->control->increaseBtc($_POST['buy']);
                    $this->control->decreaseSatoshi($_POST['buy'] * 1000.00);

                    //add Transection
                    $this->control->insertTransection($_POST['buy'], "BUY");
                    echo '
                    <script type="text/javascript">

                    $(document).ready(function(){

                        Swal.fire({
                            icon: "success",
                            title: "ซื้อสำเร็จ",
                            text: "คุณได้รับ Btc",
                            timer: 3000,
                            showConfirmButton: false,
                            })
                            .then(function() {
                                window.location = "index.php";
                            })
                    });
                    </script>
                    ';
                } else {
                    echo '
                    <script type="text/javascript">

                    $(document).ready(function(){

                        Swal.fire({
                            icon: "error",
                            title: "ซื้อไม่สำเร็จ",
                            text: "Satoshi ไม่พอ",
                            timer: 3000,
                            showConfirmButton: false,
                            })
                            .then(function() {
                                window.location = "index.php";
                            })
                    });
                    </script>
                    ';
                }
            }

            if (isset($_POST['sell'])) {
                
                //Check satoshi for buy btc 
                if ($this->control->checkBuy($_POST['sell'] / 1000.00)) {

                    //Process Transection
                    $this->control->increaseSatoshi($_POST['sell']);
                    $this->control->decreaseBtc($_POST['sell'] / 1000.00);

                    //add Transection
                    $this->control->insertTransection($_POST['sell'], "SELL");
                    echo '
                    <script type="text/javascript">

                    $(document).ready(function(){

                        Swal.fire({
                            icon: "success",
                            title: "ขายสำเร็จ",
                            text: "คุณได้รับ BTC",
                            timer: 3000,
                            showConfirmButton: false,
                            })
                            .then(function() {
                                window.location = "index.php";
                            })
                    });
                    </script>
                    ';
                } else {
                    echo '
                    <script type="text/javascript">

                    $(document).ready(function(){

                        Swal.fire({
                            icon: "error",
                            title: "ขายไม่สำเร็จ",
                            text: "BTC คุณไม่พอ",
                            timer: 3000,
                            showConfirmButton: false,
                            })
                            .then(function() {
                                window.location = "index.php";
                            })
                    });
                    </script>
                    ';
                }
            }
            
            require_once("view/treade_view.php");

        }

    }

?>