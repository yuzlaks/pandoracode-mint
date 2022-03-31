<?php class_exists('Template') or exit; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Welcome - Pandoracode Mint</title>
=======
    <title>Document</title>
>>>>>>> 59340d37462c1ef879080feb320f9c9df7cc4c18
    <link rel="stylesheet" href="<?php echo htmlentities(asset('css/bootstrap.min.css'), ENT_QUOTES, 'UTF-8') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@700&display=swap" rel="stylesheet">
</head>

<style>
    body {
        background-color: #fefefe;
    }

    img {
        max-width: 20px;
    }

    h2 {
        font-family: 'Sora', sans-serif;
        color: #2d3436;
        margin-top: 30px;
        font-size: 33px;
    }

    p {
        color: #636e72;
        font-family: calibri;
    }

    .button {
        margin-left: -5px;
        border: none;
        background-color: #BADC58;
        color: white;
        padding: 5px;
        font-weight: bold;
        text-decoration: none !important;
        cursor: pointer;
    }

    .button-start {
        border: 1px solid #BADC58;
        font-weight: bolder;
        color: #BADC58 !important;
        box-shadow: 2px 3px 10px #e1e1e1;
        padding: 4px;
        text-decoration: none !important;
        cursor: pointer;
    }

    .button:hover {
        color: white;
        background-color: #303952;
    }

    .button-start:hover {
        color: white;
        background-color: #303952;
    }

    span {
        color: #BADC58
    }

    .container {
        margin-top: 140px;
    }

    b {
        color: #3d3d3d;
    }

    .version-info {
        margin-top: 20px;
        color: #e1e1e1;
    }
</style>

<body>
<<<<<<< HEAD
=======
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img class="" src="<?php echo htmlentities(asset('img/mint-logo.png'), ENT_QUOTES, 'UTF-8') ?>" alt="">
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Dokumentasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Source Code</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang Kami</a>
                </li>

            </ul>

            <?php if(function_exists('auth')): ?> 
            
            <div class="dropdown" style="margin-left:-200px !important">
                <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo htmlentities(auth()->username, ENT_QUOTES, 'UTF-8') ?>
                </a>
                <div style="margin-left:-100px !important" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?php echo htmlentities(url('logout'), ENT_QUOTES, 'UTF-8') ?>">Logout</a>
                </div>
            </div>
            <?php endif; ?>


        </div>
    </nav>
>>>>>>> 59340d37462c1ef879080feb320f9c9df7cc4c18
    <div class="container">
        <div class="d-flex justify-content-center">

        </div>
        <center>
            <h2>Pandoracode Mint <br><span>Framework</span> PHP mini yang dibangun <br> untuk kerja tim maupun solo.</h2>
            <p>"Kami berusaha terus berkembang menjadi lebih baik."</p>

            <br>
<<<<<<< HEAD
            <a href="http://pandoradev.site" class="button">Dokumentasi</a>

            <p class="version-info">V 1.2</p>
=======
            <a href="google.com" class="button-start">Mulai Aksi</a>
            <a href="google.com" class="button">Dokumentasi</a>

            <p class="version-info">V 1.1</p>
>>>>>>> 59340d37462c1ef879080feb320f9c9df7cc4c18

        </center>
    </div>
</body>

<script src="<?php echo htmlentities(asset('js/jquery-3.6.0.js'), ENT_QUOTES, 'UTF-8') ?>" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="<?php echo htmlentities(asset('js/bootstrap.bundle.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
<script src="<?php echo htmlentities(asset('js/bootstrap.bundle.min.js'), ENT_QUOTES, 'UTF-8') ?>"></script>

</html>