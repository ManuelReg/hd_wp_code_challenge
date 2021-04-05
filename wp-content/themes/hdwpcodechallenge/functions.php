<?php

add_shortcode( 'hdvideo', 'display_video' );
function display_video($atts){
	$a = shortcode_atts( array(
		'id' => '',
		'url' => '',
        'width' => '',
        'height' => ''
	), $atts );

    if(!empty(esc_attr($a['id']))){
        $html = '<iframe width="'.esc_attr($a['width']).'" height="'.esc_attr($a['height']).'" src="https://www.youtube.com/embed/'.esc_attr($a['id']).'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    }

    if(!empty(esc_attr($a['url']))){
        $html = '<video width="'.esc_attr($a['width']).'" height="'.esc_attr($a['height']).'" controls>
        <source src="'.esc_attr($a['url']).'" type="video/mp4">
      Your browser does not support the video tag.
      </video>';
    }

    if(!empty(esc_attr($a['id'])) && !empty(esc_attr($a['url']))){
        $html = "HDVIDEO SHORTCODE: You can't use id and url arguments in the same shortcode, 'id' is for youtube videos and 'url' is for *.mp4 files";
    }

    return $html;
}


?>