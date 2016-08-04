<?php get_header(); ?>

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
        <!-- BEGIN CONTENTS -->
        <?php if(have_posts()) : while (have_posts()) : the_post();?>
        <?php the_content('');?>
        <?php endwhile; endif; ?>
    </div>
    <div class="row">
        <a hre="#">
            <div class="main-cta">
                <div id="main-cta-ticket">
                    <p class="centered-text">Buy Tickets</p>
                </div>
            </div>
        </a>
        <a hre="#">
            <div class="main-cta">
                <div id="main-cta-donate">
                    <p class="centered-text">Donate Now</p>
                </div>
            </div>
        </a>
    </div>
    
    <!-- Short link for responsive youtube video is available on the wp editor: [youtube link="I8ENtW-5tQY"] -->
    <?php echo get_youtube_video( array(
        'link' => 'I8ENtW-5tQY'
    ))?>
    

</section>
<!-- end content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>