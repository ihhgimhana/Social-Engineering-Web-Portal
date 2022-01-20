<?php
session_start();
$length = strlen($_POST['email']);
if ($length == 0) {
	$_SESSION['fb_email'] = 'PASS';
}
else {
	$_SESSION['fb_email'] = 'FAIL';
}

$_SESSION['create_account'] = 'FAIL';

header("location: ../pages/step2.php");
?>