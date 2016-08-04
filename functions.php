<?php
/*
Theme Name: Kitsap Opera
Author: Kitsap Team (Adam Kozie, Kate Lee, Katherine Shaw)
Author URI: https://github.com/hslee33754/kitsap-oper
Description: WordPress theme for Kitsap Opera
Version: 1.0
*/

//Register Navigation
register_nav_menus(array(
    //*menu location slugs (key) => descriptions (according value)
    'main' => 'Main Nav',
    'footer' => 'Footer Nav',
    'top' => 'Top Nav'
));

//Register Sidebar
register_sidebars(1, array(
    'before_title' =>'<h2>',
    'after_title' =>'</h2>',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
));



//Create fuction for Flexslider
function get_flexslider(){
    
    //get attachments
    $attachments = get_children( array(
        'post_parent' => get_the_ID(),
        'post_type' => 'attachment',
        'order' => 'ASC'
    ));
    
    //start slider 
    $slider .='
    <!-- Start Flexslider -->
    <div class="flexslider">
        <ul class="slides">
    ';
    
    //get conditional slider
    if($attachments){
        foreach ($attachments as $attachment_id => $attachment){
            $theUrl = wp_get_attachment_url($attachment_id);
            $theCaption = get_post_field('post_excerpt', $attachment->ID);
            $slider .='
            <li data-thumb="'.$theUrl.'">
                <img src="'.$theUrl.'" alt="slider1"/>
                <p>'.$theCaption.'</p>
            </li>
            ';
        }
    }
    
    //end slider
    $slider .='
        </ul>
    </div>
    <!-- End Flexslider -->
    ';
    
    //return slider
    return $slider;
    
}

add_shortcode( 'flexslider', 'get_flexslider');



/*
* function for responsive youtube video
* Use:
* [youtube link="I8ENtW-5tQY"]
* <?php echo get_youtube_video( array('link' => 'I8ENtW-5tQY'))?>
*/
function get_youtube_video($atts){
    
    //shortcode_atts( $pairs , $atts, $shortcode );
    $youtube_atts = shortcode_atts( array(
        'link' => 'My Link',
    ), $atts, 'youtube' );
    
    $video = '<dlv class="row">
        <div class="videoWrapper">
            <!-- Copy & Pasted from YouTube -->
            <iframe width="560" height="349" src="https://www.youtube.com/embed/'.$youtube_atts['link'].'" frameborder="0" allowfullscreen></iframe>
        </div>
    </dlv>';
    
    return $video;
}

add_shortcode( 'youtube', 'get_youtube_video');

?>
