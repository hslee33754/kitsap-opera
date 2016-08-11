<?php get_header(); ?>
    
<!-- start contnet -->
<section class="main_section">
    <div class="row">
        
<!-- BEGIN CONTENTS -->
<?php if(is_home() || is_category()) : ?>
    <?php if(have_posts()) : while (have_posts()) : the_post();?>
        <article class="excerpt">
            <a href="<?php the_permalink(); ?>" t><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a>
            <h1><a class="blk" href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
            <small>Posted on <?php the_time('F j, Y'); ?> in <?php the_category(', '); ?></small>
            <p>
                <?php echo strip_tags(get_the_excerpt()); ?>
                <a class="blk read-more" href="<?php the_permalink(); ?>"> Read More &raquo;</a> 
            </p>
        </article>
    <?php endwhile; endif; ?>
<?php 
else: 
    if(have_posts()) : while (have_posts()) : the_post();
    the_content(''); 
    endwhile; endif; 
endif; 
?>
        
    </div>
</section>
<!-- end content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
