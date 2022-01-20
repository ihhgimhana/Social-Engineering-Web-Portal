<?php
session_start();
$_SESSION['download'] = 'PASS';
$_SESSION['fake_ad'] = 'PASS';
?>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Web Portal - Step 2</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="../css/style.css" rel="stylesheet" type="text/css">


    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Spin The Wheel
                <br>
                <img src="../images/wheel.gif">
                <br>
                    <a href="step3.php">
                        <input class="login_button" type="submit" name="wheel"  value="Next">
                    </a>
            </div>
        </div>
    </body>
</html>
