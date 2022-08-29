<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>DashBoard</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="treade.php">Treade</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        <table class="table">
        <thead>
            <th scope="col">Account</th>
            <th scope="col">btc</th>
            <th scope="col">Satoshi</th>
            
        </thead>
        <tbody>
            <?php
                foreach ($acc as $key=>$trans) {
                    echo    '<tr>
                                <th>'. $key .'</th>
                                <td>'.$trans['btc'].'</td>
                                <td>'.$trans['Satoshi'].'</td>
                            </tr>';
                }
            ?>
        </tbody>
        </table>

        <br>
        
        <table class="table">
        <thead>
            <th scope="col">Transection</th>
            <th scope="col">Btc</th>
            <th scope="col">Satoshi</th>
            <th scope="col">action</th>
        </thead>
        <tbody>
            <?php
                foreach ($tran as $key=>$trans) {
                    echo    '<tr>
                                <th>'. $key .'</th>
                                <td>'.$trans['btc'].'</td>
                                <td>'.$trans['Satoshi'].'</td>
                                <td>'.$trans['action'].'</td>
                            </tr>';
                }
            ?>
        </tbody>
        </table>

    </div>
    
    
</body>
</html>