<?php
session_start();
$_SESSION['fake_ad'] = 'FAIL';
sleep(10);
header("location: ../pages/step3.php");
?>
