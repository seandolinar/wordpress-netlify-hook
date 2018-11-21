<?php
/*
Plugin Name: Wordpress Netlify Hook
Author: Sean Dolinar
Author URL: https://www.seandolinar.com/
Version: 0.1.0
*/


//puts the script on the proper pages and passes data from the server-side
function wordpress_netlify_enqueue($hook) {
    if ( 'post.php' != $hook && 'post-new.php' != $hook ) { 
        return;
    }

    wp_enqueue_script( 'wordpress-netlify-hook', plugin_dir_url( __FILE__ ) . '/wordpress-netlify-hook.js' );

   
}

//enques the scripts from wordpress_netlify_enqueue
add_action( 'admin_enqueue_scripts', 'wordpress_netlify_enqueue' );


?>