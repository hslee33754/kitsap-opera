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
    'footer' => 'Footer Nav'
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

?>