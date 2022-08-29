<?php

    /* include("controller/index_controller.php");

    $obj = new Controller();
 */
    if (isset($_POST['send'])) {
        
    }

    $errors = [];
    $form_data = [];
    $errors['status'] = false;

    /* if (empty($_POST['send'])) {

        $form_data['success'] = false;
        $error['no'] = 'text is required';

    } else {

        $text = htmlspecialchars($_POST['insert'], ENT_QUOTES,'UTF-8') ?? NULL;

        $arrayString = preg_split('/\s+/', $text);

        $sql = "";

        echo json_encode($_POST['send']);

    } */

    echo json_encode($errors);

?>