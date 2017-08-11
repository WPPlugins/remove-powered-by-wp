<?php
/*
 * Plugin Name: Remove "Powered by Wordpress"
 * Version: 1.0.0
 * Plugin URI: http://webd.co.uk/remove-powered-by-wp/
 * Description: Removes the Wordpress credit on the default Wordpress theme for those wanting to customise the theme
 * Author: webd.co.uk
 * Author URI: http://webd.co.uk
 * Text Domain: remove-powered-by-wp
 */

wp_enqueue_style('rpbw-css', plugin_dir_url( __FILE__ ) . 'style.css' );

?>