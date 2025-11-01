<?php

session_start();

$code= str_shuffle("1234");

$_SESSION["code"]=$code;

$im = imagecreatetruecolor(80, 40);

$bg = imagecolorallocate($im, 0, 0, 0); //background color blue

$fg = imagecolorallocate($im, 255, 0, 0);//text color white


// Make the background transparent
imagecolortransparent($im, $bg);

imagefill($im, 0, 0, $bg);

imagestring($im, 15, 20, 10,  $code, $fg);

header("Cache-Control: no-cache, must-revalidate");

header('Content-type: image/png');

imagepng($im);

imagedestroy($im);

?>