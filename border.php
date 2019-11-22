<?php
//Create the image handle, set the background
$im = imagecreatetruecolor(100, 100);
imagefilledrectangle($im, 0, 0, 100, 100,
imagecolorallocate($im, 0, 0, 255));
imageellipse($im, 50, 50, 50, 50,
imagecolorallocate($im, 0, 0, 0));
$border = imagecolorallocate($im, 0, 0, 0);
$fill = imagecolorallocate($im, 255, 255, 0);
imagefilltoborder($im, 50, 50, $border, $fill);
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>