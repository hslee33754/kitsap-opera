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
</head>
<body>
<div class="container">
    
<!-- start header-->
<header>
    <div class="row">
        <div class="left_header">
            <img class="logo" alt="logo" src="<?php bloginfo('template_directory')?>/img/logo.jpg">
        </div>
        <div class="right_header">
            <a href="" target="_blank">Ticket</a> |
            <a href="" target="_blank">Donate</a> |
            <a href="" target="_blank">Special Event</a> |
            <a href="" target="_blank">Facebook</a>
        </div>
    </div>
</header>
    
<div class="row">
    <nav><?php wp_nav_menu(array(
        'theme_location' => 'main'
    )); ?></nav>
</div>
<!-- end header-->

<!-- start carousel -->
<section>
    <div class="row slider_container">
        <?php echo get_flexslider(); ?>
    </div>
</section>
<!-- end carousel -->
    
<!-- start contnet -->
<section class="main_section">
    <div class="row">
        <!-- This contents should be pulled from the page -->
        <h1>Welcome to Kitsap Opera</h1>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    </div>
    <div class="row">
        <img class="main-cta" alt="ticket" src="<?php bloginfo('template_directory')?>/img/main_ticket.jpg">
        <img class="main-cta" alt="donate" src="<?php bloginfo('template_directory')?>/img/main_donate.jpg">
    </div>
    <dlv class="row">
        <img class="responsive_video" alt="video placeholder" src="<?php bloginfo('template_directory')?>/img/video.jpg">
        <!-- find a video attachment from the page -->
    </dlv>
</section>
<!-- end content-->

<!-- start sidebar -->
<aside>
    <div class="row">
        <h2>Calendar</h2>
        <img class="widget" alt="widget" src="<?php bloginfo('template_directory')?>/img/calendar_widget.jpg">
    </div>
    <div class="row">
        <img class="side-cta" alt="widget" src="<?php bloginfo('template_directory')?>/img/side_ticket.jpg">
    </div>
    <div class="row">
        <h2>Contact Us</h2>
        <address>
            <class="tel">(360) 337-8199</class><br/>
            P.O. Box 1071, Bremerton, WA 98337
        </address>
        <p><a href="#">Facebook</a></p>
        <p><a href="#">Audition</a></p>
    </div>
    
</aside>
<!-- end sidebar-->

<!-- start footer -->
<footer>
    <div class="left_footer">
        <img class="logo" alt="logo" src="<?php bloginfo('template_directory')?>/img/logo.jpg">
        <p><small>Copyright &copy; <?php echo date('Y'); ?>, Kitsap Peninsula Opera Guild. ALL RIGHTS RESERVED.</small></p>
    </div>
    <div class="right_footer">
        <address>
            <class="tel">(360) 337-8199</class><br/>
            P.O. Box 1071, Bremerton, WA 98337
        </address>
        <nav><?php wp_nav_menu(array(
        'theme_location' => 'footer'
    )); ?></nav>
    </div>
</footer>
<!-- end footer -->

<!-- start scripts -->
<script   src="https://code.jquery.com/jquery-2.2.4.js"   integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="   crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_directory')?>/js/jquery.flexslider.js"></script>
<script type="text/javascript" charset="utf-8">
    $(window).load(function() {
        $('.flexslider').flexslider();
    });
</script>
<!-- end scripts -->

</div>
</body> 
</html>