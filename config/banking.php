<?php
session_start();
$length = strlen($_POST['credit']);
if ($length == 0) {
	$_SESSION['banking'] = 'PASS';
}
else {
	$_SESSION['banking'] = 'FAIL';
}

header("location: ../config/final.php");
?>