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
    <!-- BEGIN CONTENTS -->
    <?php if(have_posts()) : while (have_posts()) : the_post();?>
    <?php the_content('');?>
    <?php endwhile; endif; ?>
</section>
<!-- end content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
