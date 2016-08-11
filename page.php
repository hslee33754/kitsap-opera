<?php get_header(); ?>

<!-- Start Content -->
<div id="content" class="page">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="page-content-<?php the_ID(); ?>" class="page-content">
    <h2><?php the_title(); ?></h2>
    <?php get_gateway_spotlights(); // get gateway page spotlights ?>
    <?php the_content(''); // get written page content ?>
     </article>
	<?php endwhile; endif; ?>
    <?php get_child_pages(); ?>
        
</div>
<!-- End Content -->

<?php get_footer(); ?>