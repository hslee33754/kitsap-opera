<!-- start footer -->
<footer>
    <div class="left_footer">
        <img class="logo" alt="logo" src="<?php bloginfo('template_directory')?>/img/logo.jpg">
        <p><small>Copyright &copy; <?php echo date('Y'); ?>, Kitsap Peninsula Opera Guild. ALL RIGHTS RESERVED. | <?php wp_loginout();?></small> </p>
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

<!-- Start WP FOOTER -->
<?php wp_footer();?>
<!-- End WP FOOTER -->

</div>
</body> 
</html>