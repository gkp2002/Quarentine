<?php
  $width=400;
  $height=200;
  $image=  imagecreatetruecolor($width,$height);
  $red = imagecolorallocate($image,255,0,0);
  $blue= imagecolorallocate($image,0,0,255);
  $green = imagecolorallocate($image,0,255,0);
//   $color = imagecolorallocate($image,$red,$green,$blue);
  imagefill($image,0,0, $blue);
// $color = imagecolorallocate($image,255,0,0);
 header('Content-Type: image/jpeg');
 imagejpeg($image);

?>