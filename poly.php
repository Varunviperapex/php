<?php
//set the values of the polygon
$values = array(
				150,50,
				55,199,
				91,231,
				209,231,
				245,119,
				290,140);
//create the size of the image or blank image
$image = imagecreatetruecolor(300, 300);
//set the background color of image
$background_color = imagecolorallocate($image, 0, 0, 153);
//Fill the background with the above selected color
imagefill($image, 0, 0, $background_color);
//allocate a color for the polygon
$col_poly = imagecolorallocate($image, 255, 255, 255);
//draw the polygon
imagepolygon($image, $values,4, $col_poly);
header('Content-type: image/png');
imagepng($image);
?>