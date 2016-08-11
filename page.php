<?php get_header(); ?>

<!-- start contnet -->
<section class="main_section">
    <div class="row">

<!-- BEGIN CONTENTS -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(''); ?>
<?php endwhile; endif; ?>
<small>page.php</small>

    </div>
</section>
<!-- end content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>

