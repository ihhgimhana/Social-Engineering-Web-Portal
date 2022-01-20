<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Web Portal - Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="../css/style.css" rel="stylesheet" type="text/css">

        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
                <div class="title m-b-md">
                    Enter a Nickname
                </div>
                <form method="post" action="../config/nickname.php" >
                    <input class="text_box" type="text" name="nickname" required>
                    <br><br>
                    <input class="login_button" type="submit" name="login"  value="Submit">
                </form>

            </div>
        </div>
    </body>
</html>


<?php



?>