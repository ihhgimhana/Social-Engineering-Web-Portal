<?php
session_start();
if ($_SESSION['nickname'] == ($_POST['token'])) {
	$_SESSION['token'] = 'PASS';
}
elseif (($_POST['token']) == 20121221 ) {
	$_SESSION['token'] = 'FAIL';
}

header("location: ../pages/step5.php");
?>
