<?php
$image = imagecreate(200,200);
$bgcolor = imagecolorallocate($image,0,205,0);
$fgcolor = imagecolorallocate($image,255,0,0);
imagefilledrectangle($image,100,50,150,150, $fgcolor);
header('Content-Type: image/png');
imagejpeg($image);


?>