<?php

$arquivo = 'paisagem.jpeg';
$maxWidth = 500;
$maxHeight = 500;

list($originalWidth, $originalHeight) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeight;
$ratioDest = $maxWidth / $maxHeight;

$finalWidth = 0;
$finalHeight = 0;

if ($ratioDest > $ratio) {
    $finalWidth = $maxHeight * $ratio;
    $finalHeight = $maxHeight;
} else {
    $finalHeight = $maxWidth / $ratio;
    $finalWidth = $maxWidth;
}

$image = imagecreatetruecolor($finalWidth, $finalHeight);
$originalImg = imagecreatefromjpeg($arquivo);

imagecopyresampled(
    $image, 
    $originalImg, 
    0, 0, 0, 0, 
    $finalWidth, $finalHeight, 
    $originalWidth, $originalHeight
);

header('Content-Type: image/jpeg');
imagejpeg($image, null, 100);
