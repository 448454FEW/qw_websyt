<?php 
session_start();
header("Content-type: image/png");
$_SESSION["kkapcha"] = rand(1000, 9999);
$text = $_SESSION["kkapcha"];
$width = 150;
$height = 50;
$image = imagecreate($width, $height);
imagecolorallocate($image, 255, 255, 255);
$color = imagecolorallocate($image, 255, 0, 0);
$size = 20;
$font = "font.TTF";
imagefttext($image, $size, 1, 50, 35, $color, $font, $text);
imagepng($image);
