<?php

/*---------------------------------------------------------------*/
/* [phone] - displays linked phone number
/*---------------------------------------------------------------*/

add_shortcode('phone', 'display_phone');
function display_phone( $attr = array()) {
    extract(shortcode_atts(array(
        'id'    => '',
    ), $attr));
    
    return '<a class="phone" href="tel:+1-503-925-7970">(503) 925-7970</a>';
}


/*---------------------------------------------------------------*/
/* [link pid=""]link text[/link]
/*---------------------------------------------------------------*/

add_shortcode('link', 'display_internal_link');
function display_internal_link( $attr = array(), $content="" ) {
    extract(shortcode_atts(array(
        'pid'    => '',
        'class'  => ''
    ), $attr));

    return '<a href="'. get_permalink( $pid ) .'" class="'. $class .'">'. $content . '</a>';
}

?>