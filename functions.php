<?php
/*-----------------------------------------------------------------------------
# Wordpress||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
-----------------------------------------------------------------------------*/
add_filter('show_admin_bar', '__return_false');
add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size (280, 150);
remove_action('init', 'wp_admin_bar_init'); 

?>