<?php 

//300dpi - 100dpi - 30dpi

// файл
$filename = 'test.jpg';
$percent = 0.5;
// тип содержимого
header('Content-Type: image/jpeg');
// получение новых размеров
list($width, $height) = getimagesize($filename);
$new_width = $width * $percent;
$new_height = $height * $percent;
// ресэмплирование
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
// вывод
imagejpeg($image_p, null, 100);
