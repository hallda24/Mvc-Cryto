<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TEST</h1>
    <?php
        foreach ($data as $ass){
            echo    '<tr>
                        <td>'.$ass['ass_name'].'</td>
                        <td>'.$ass['ass_detail'].'</td>
                        <td>'.$ass['ass_timeout'].'</td>
                    </tr>';
        }
    ?>
</body>
</html>