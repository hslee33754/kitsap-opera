<?php get_header(); ?>
    
<!-- start contnet -->
<section class="main_section">
    <div class="row">
        <!-- BEGIN CONTENTS -->
        <?php if(have_posts()) : while (have_posts()) : the_post();?>
        <?php the_content('');?>
        <?php endwhile; endif; ?>
    </div>
</section>
<!-- end content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>