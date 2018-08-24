<?php
function css_function(){
  wp_enqueue_style('style-css',get_template_directory_uri().'/style.css',false,true,'all');
  wp_enqueue_style('style-css1',get_template_directory_uri().'/slick-theme.css',false,true,'all');
  wp_enqueue_style('style-css2',get_template_directory_uri().'/slick.css',false,true,'all');


}
add_action('wp_enqueue_scripts','css_function');

/*function javascript_functions(){
  wp_enqueue_style('abc',get_template_directory_uri().'/concurs.js',false,true,'all');
}
add_action('wp_enqueue_scripts','javascript_functions');*/
