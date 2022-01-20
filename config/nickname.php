<?php

include 'database.php';

session_start();
$_SESSION['nickname'] = ($_POST['nickname']);
header("location: ../pages/step1.php");

// $nickname = $con->real_escape_string($_POST['nickname']);

// $null = NULL;

// $query="INSERT INTO tasks VALUES ('$nickname', '$null', '$null', '$null', '$null', '$null', '$null')";

// mysqli_query($con,$query);
// mysqli_close($con);

// header("location: ../pages/step1.php");
// 
?>