<?php

$arquivo = 'paisagem.jpeg';
$width = 300;
$height = 300;

list($originalWidth, $originalHeight) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeight;
$ratioDest = $width / $height;

$finalWidth = 0;
$finalHeight = 0;
$finalX = 0;
$finalY = 0;

// ajusta a imagem
if ($ratioDest > $ratio) {
    $finalWidth = $height * $ratio;
    $finalHeight = $height;
} else {
    $finalHeight = $width / $ratio;
    $finalWidth = $width;
}

// corta a imagem
if ($finalWidth < $width) {
    $finalWidth = $width;
    $finalHeight = $width / $ratio;

    $finalY = -(($finalHeight - $height) / 2);
} else {
    $finalHeight = $height;
    $finalWidth = $height * $ratio;

    $finalX = -(($finalWidth - $width) / 2);
}

$image = imagecreatetruecolor($width, $height);
$originalImg = imagecreatefromjpeg($arquivo);

imagecopyresampled(
    $image, 
    $originalImg, 
    $finalX, $finalY, 0, 0, 
    $finalWidth, $finalHeight, 
    $originalWidth, $originalHeight
);

header('Content-Type: image/jpeg');
imagejpeg($image, null, 100);
