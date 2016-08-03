<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php bloginfo('title'); ?></title>
    
    <!-- Meta Tags -->
    <meta name="description" content="summary of page content">
    <meta name="keywords" content="keywords, keyword">
    <meta name="author" content="author of the document">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Style Sheets -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/flexslider.css">
    
    <!-- HTML5 shiv -->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    
    <!-- start wp head --> 
    <?php wp_head(); ?>
    <!-- end wp head --> 
    
</head>
<body>
<div class="container">
    
<!-- start header-->
<header>
    <div class="row">
        <div class="left_header">
            <a href="<?php bloginfo('url');?>"><img class="logo" alt="logo" src="<?php bloginfo('template_directory')?>/img/logo.jpg"></a>
        </div>
        <nav>
        <?php wp_nav_menu(array(
            'theme_location' => 'top'
        )); ?>
        </nav>
        <!--
        <div class="right_header">
            <a href="" target="_blank">Ticket</a> |
            <a href="" target="_blank">Donate</a> |
            <a href="" target="_blank">Special Event</a> |
            <a href="" target="_blank">Facebook</a>
        </div>-->
    </div>
</header>
    
<div class="row">
    <nav><?php wp_nav_menu(array(
        'theme_location' => 'main'
    )); ?></nav>
</div>
<!-- end header-->