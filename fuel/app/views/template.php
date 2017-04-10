<?php
date_default_timezone_set('Asia/Hong_Kong');
//session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo $title;?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <?= Asset::css(array('style.css','font-awesome.min.css','font-awesome.css', 'rwd-table.css')); ?>
    
                
                
    <?= Asset::js(array('jquery-1.11.1.min.js','jquery.dropotron.min.js','jquery.scrolly.min.js','skel.min.js'
         , 'skel-viewport.min.js','util.js', 'main.js','respond.js','jquery.js','jquery-ui.widget.min.js','rwd-table.js'));?>
</head>
<body>
    <!--#0F2856;-->
    <?php echo $header;?>
    
    <?php echo $banner;?>
    
    <?php echo $content; ?>
        
    <?php echo $footer; ?>
</body>
</html>