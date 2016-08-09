<!-- start footer -->
<footer id="main_footer">
    <div class="left_footer">
        <img class="logo" alt="logo" src="<?php bloginfo('template_directory')?>/img/logo.jpg">
        <p><small>Copyright &copy; <?php echo date('Y'); ?>, Kitsap Peninsula Opera Guild. | <?php wp_loginout();?></small> </p>
    </div>
    <div class="right_footer">
        <small><address>
            <span class="tel">(360) 337-8199</span><br/>
            P.O. Box 1071, Bremerton, WA 98337
        </address></small>
        <small><nav><?php wp_nav_menu(array(
        'theme_location' => 'footer'
    )); ?></nav></small>
    </div>
</footer>
<!-- end footer -->

<!-- start scripts -->
<script type="text/javascript" charset="utf-8">
    
// flex slider jquery //
$(window).load(function() {
    $('.flexslider').flexslider();
});
// flex slider jquery //
    
// lightbox jquery //
$(function() {	  
    $('.photo-gallery').each(function() { // the containers for all your galleries. - multiple galleryies on one page.
        $(this).magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image', //type option: image, ifram, inline, ajax - No auto detection. it is required.
            tLoading: 'Loading image #%curr%...', // String that contains classes that will be added to the root element of popup wrapper and to dark overlay.
            mainClass: 'mfp-img-mobile', // String that contains classes that will be added to the root element of popup wrapper and to dark overlay.
            gallery: { 
                enabled: true, // allows you to switch content of popup and adds navigation arrows
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            image: { 
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.', // Error message
                titleSrc: function(item) {
                    return item.el.attr('title');
                    // Title attribute of the target element that contains caption for the slide.
                }
            }
        });
    });
});
//  End Lightbox jquery //  
</script>
<!-- end scripts -->

<!-- Start WP FOOTER -->
<?php wp_footer();?>
<!-- End WP FOOTER -->

</div>
</body> 
</html>
