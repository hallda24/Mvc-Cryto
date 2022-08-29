<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>treade</title>
</head>
<body>
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
        </ul>
        </div>
    </div>
    </nav>

    <div class="container">
        <form method="POST" clas="mx-auto">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Buy (หน่วยเป็น btc Ex 1.25, 0.5)</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="buy" min="1">
                <div id="emailHelp" class="form-text">...</div>
            </div>
            <button type="submit" class="btn btn-primary">BUY</button>
        </form>

        <form method="POST" clas="mx-auto">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Sell (หน่วยเป็น Satoshi Ex 1250, 500)</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="sell" min="1000">
                <div id="emailHelp" class="form-text">...</div>
            </div>
            <button type="submit" class="btn btn-primary">SELL</button>
        </form>
    </div>
</body>
</html>