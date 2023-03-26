<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="BeyondLimits official website"/>
    <meta name="keywords" content="portfolios, web development, graphic designing, vfx, 3D modeling, motion graphics, illustration"/>
    <meta name="author" content="BeyondLimits"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link rel="stylesheet" href="<?php echo URLROOT;?>/css/template.css"/>
    <title><?php echo SITENAME;?></title>
</head>
<body>
   <header>
        <div class="flex-container">
            <?php require APPROOT . '/views/components/brandlogo.php'; ?>
            <?php require APPROOT . '/views/components/socialmedia.php'; ?>
        </div>
        <?php require APPROOT . '/views/components/topmenu.php'; ?>
   </header> 
