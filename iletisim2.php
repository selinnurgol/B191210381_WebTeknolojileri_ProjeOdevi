<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Sonuç</title>

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap-customize.css">

    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-warning shadow">
            <div class="container">
                <a class="navbar-brand" href="home.php">MEMLEKETİM</a>
            </div>

        </nav>
    </header>


    <div class="container mb-3 mt-5">
        <div class="box">
            <h4 class="text-warning">İLETİŞİM</h4>
            <div class="form-group">
                <label class="text-success font-weight-bold">Ad Soyad: </label>
                <label class="text-dark font-weight-bold"><?php echo $_POST["name"] ?></label>
            </div>
            <div class="form-group">
                <label class="text-success font-weight-bold">Mail: </label>
                <label class="text-dark font-weight-bold"><?php echo $_POST["mail"] ?></label>
            </div>
            <div class="form-group">
                <label class="text-success font-weight-bold">Mesaj: </label>
                <label class="text-dark font-weight-bold"><?php echo $_POST["message"] ?></label>
            </div>
            <div class="form-group">
                <a href="home.php">
                    <button class="btn btn-warning text-light">ANASAYFA</button>
                </a>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>