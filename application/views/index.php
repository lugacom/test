<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description; ?>" />
        <?php foreach ($styles as $style): ?>
            <link href="<?php echo URL::base(); ?>pub/css/<?php echo $style; ?>.css" rel="stylesheet" type="text/css" />
        <?php endforeach; ?>
    </head>
    <body>
        <div id="container">
            <?php echo $header; ?>
            <div id="content">
                <div id="sidebar"><?php //echo $widget; ?></div><!-- #sidebar  -->
                <div id="cont"><?php echo $content; ?></p></div><!-- #cont -->
            </div><!--#content-->
            <div style="clear:both"></div><!--#clear-->
            <div id="empty"></div><!--#empty-->
        </div><!--#container-->
        <?php echo $footer; ?>
    </body>
</html>