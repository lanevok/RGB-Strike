<?php
session_start();
header("Content-Type: image/png");
$image = imagecreate(100,100);
if($_GET){
	$background = imagecolorallocate($image, $_GET['r'], $_GET['g'], $_GET['b']);
}
else{
	$background = imagecolorallocate($image, $_SESSION['r'], $_SESSION['g'], $_SESSION['b']);
}
imagepng($image);
imagedestroy($image);
?>