<?php get_header(); ?>

<!-- start contnet -->
<section class="main_section">
    <div class="row">

<!-- start content loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(''); ?>
<?php endwhile; endif; ?>
<!-- end content loop -->

<!-- start get child page for gateway pages -->
<?php get_my_child_pages(); ?>
<!-- end get child page for gateway pages -->

    </div>
</section>
<!-- end content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>

