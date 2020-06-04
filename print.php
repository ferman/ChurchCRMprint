<?php
// CREATE NEW IMAGE + SPECIFY COLORS
$img = imagecreate(900, 720);
$white = imagecolorallocate($img, 255, 255, 255);
$grey = imagecolorallocate($img, 100, 100, 100);
$black = imagecolorallocate($img, 0, 0, 0);

// DRAW BACKGROUND AND TEXT
$txt = "Hello World";

imagefilledrectangle($img, 0, 0, 399, 29, $white);
imagettftext($img, 24, 0, 5, 24, $grey, $txt);
imagettftext($img, 24, -10, 5, 120, $black, $txt);
imagettftext($img, 24, 10, 120, 120, $black, $txt);

// OUTPUT
header('Content-type: image/png');
imagepng($img, "test.png");
imagedestroy($img);

//shell_exec('brother_ql -b network -m QL-820NWB -p tcp://192.168.1.80 print -l 62 /var/www/churchcrmprint/label.png');

echo "done";
?>
