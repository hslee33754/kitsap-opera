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
        <img class="main-cta" alt="ticket" src="<?php bloginfo('template_directory')?>/img/main_ticket.jpg">
        <img class="main-cta" alt="donate" src="<?php bloginfo('template_directory')?>/img/main_donate.jpg">
    </div>
    <dlv class="row">
        <img class="responsive_video" alt="video placeholder" src="<?php bloginfo('template_directory')?>/img/video.jpg">
        <!-- find a video attachment from the page -->
    </dlv>
</section>
<!-- end content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>