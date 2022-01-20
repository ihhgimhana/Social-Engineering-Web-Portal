<?php
session_start();
$length = strlen($_POST['username']);
if ($length == 0) {
	$_SESSION['create_account'] = 'PASS';
}
else {
	$_SESSION['create_account'] = 'FAIL';
}

$_SESSION['fb_email'] = 'PASS';

header("location: ../pages/step2.php");

?>
