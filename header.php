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
    <link href='https://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
    
    <!--- Embed Font Awesome, Jquery, Flexslider, magnnific-popup -->
    <script src="https://use.fontawesome.com/e1f89c6389.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js"   integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="   crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_directory')?>/js/jquery.flexslider.js"></script>
    <script src="<?php bloginfo('template_directory')?>/js/jquery.magnific-popup.js"></script>

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

                    <div id="facebook">
            <a target="blank" class="facebook-group" href="https://www.facebook.com/KitsapOpera/"><img src="<?php bloginfo ('url'); ?>/wp-content/uploads/2016/08/facebook-icon.png"/></a>
        </div>
        
        <div class="right_header">
                    <nav>
        <?php wp_nav_menu(array(
            'theme_location' => 'top'
        )); ?>

        </nav>
            <i id="nav_btn" class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <script>
            $("#nav_btn").click(function(){
               $("#menu-main").slideToggle(400);
            });
        </script>
    </div>
</header>
    
<div class="row">
    <nav><?php wp_nav_menu(array(
        'theme_location' => 'main'
    )); ?></nav>
</div>

<!--breadcrumb plugin code-->
<?php if(!is_front_page()): ?>
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<?php endif; ?>
<!-- end header-->
