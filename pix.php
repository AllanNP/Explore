<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.02.2018
 * Time: 13:34
 */
getColor($_FILES['userfile']['tmp_name']);
function getColor($filename){
    $im = imagecreatefromjpeg($filename);
    $width = imagesx($im);
    $height = imagesy($im);
    $count = 0;
    for($i=0; $i < $width; $i++)
        for($j=0; $j < $height; $j++)
        {
            $rgb = imagecolorat($im, $i, $j);
            $r = ($rgb >> 16) & 0xFF;
            $g = ($rgb >> 8) & 0xFF;
            $b = $rgb & 0xFF;

            if($r==255 && $g==255 && $b==255)
            {
                $count++;
            }
        }
    echo "Белых пикселей: ".$count;
    imagedestroy($im);


}