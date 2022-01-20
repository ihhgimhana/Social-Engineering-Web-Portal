<?php
session_start();

$nickname = ($_SESSION['nickname']); 
$fb_email = ($_SESSION['fb_email']);
$create_account = ($_SESSION['create_account']);
$fake_ad = ($_SESSION['fake_ad']);
$download = ($_SESSION['download']);
$token = ($_SESSION['token']);
$banking = ($_SESSION['banking']);



?>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Web Portal - Final</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="../css/style.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Hello <?php echo $nickname; ?>, <br> Welcome to Social Engineering Results
                </div>
            </div>
        </div>
<center><h2>Your Social Engineering Score and Results </h2></center>

<style type="text/css">
.tg  {border:none;border-collapse:collapse;border-color:#9ABAD9;border-spacing:0;margin:0px auto;}
.tg td{background-color:#EBF5FF;border-color:#9ABAD9;border-style:solid;border-width:0px;color:#444;
  font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{background-color:#409cff;border-color:#9ABAD9;border-style:solid;border-width:0px;color:#fff;
  font-family:Arial, sans-serif;font-size:14px;font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-ibrr{border-color:#000000;font-size:18px;font-weight:bold;text-align:center;vertical-align:top}
.tg .tg-680y{background-color:#ffffff;border-color:#000000;color:#000000;font-size:18px;font-weight:bold;text-align:center;
  vertical-align:top}
.tg .tg-fk7a{background-color:#efefef;border-color:#000000;font-size:18px;font-style:italic;font-weight:bold;text-align:left;
  vertical-align:top}
.tg .tg-s3yc{background-color:#ffffff;border-color:#000000;color:#32cb00;font-size:18px;font-style:italic;text-align:center;
  vertical-align:top}
.tg .tg-s3sz{background-color:#ffffff;border-color:#000000;color:#fe0000;font-size:18px;font-style:italic;text-align:center;
  vertical-align:top}
</style>
<table class="tg">
<thead>
  <tr>
    <th class="tg-ibrr">Check Point</th>
    <th class="tg-680y">Your Status</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-fk7a">Nickname</td>
    <td class="tg-s3yc"><?php echo $nickname; ?></td>
  </tr>
  <tr>
    <td class="tg-fk7a">Login with Facebook Phishing Test</td>
    <td class="tg-s3sz"><?php echo $fb_email; ?></td>
  </tr>
  <tr>
    <td class="tg-fk7a">Create Account - Awareness Test</td>
    <td class="tg-s3sz"><?php echo $create_account; ?></td>
  </tr>
  <tr>
    <td class="tg-fk7a">Fake Download Button Test</td>
    <td class="tg-s3sz"><?php echo $fake_ad; ?></td>
  </tr>
  <tr>
    <td class="tg-fk7a">Token generator - Malicious File Test</td>
    <td class="tg-s3sz"><?php echo $download; ?></td>
  </tr>
  <tr>
    <td class="tg-fk7a">Submitted the Token - Awareness Test</td>
    <td class="tg-s3sz"><?php echo $token; ?></td>
  </tr>
  <tr>
    <td class="tg-fk7a">Banking Details - Awareness Test</td>
    <td class="tg-s3sz"><?php echo $banking; ?></td>
  </tr>
</tbody>
</table>

<br><br>
    </body>
</html>
