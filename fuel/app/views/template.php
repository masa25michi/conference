<?php
date_default_timezone_set('Asia/Hong_Kong');
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo $title;?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <?php echo Asset::css(array('bootstrap.css','font-awesome.min.css','font-awesome.css')); ?>
    <?php echo Asset::css('style.css'); ?>

</head>
<body>
    <?php echo $header;?>

    <?php echo $banner;?>

    <?php echo $content; ?>

    <?php // echo $signin; ?>

    <?php echo $footer; ?>
</body>
</html>