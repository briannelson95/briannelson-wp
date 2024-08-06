<?php
/**
 * Theme Functions
 * 
 * @package BrianNelson
 */

 function briannelson_enqueue_scripts () {
    wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), [], /*filemtime( get_template_directory() . '/styles.css'),*/ 'all' );
    wp_enqueue_scripts( 'main-js', get_template_directory_uri() . '/assets/main.js', [], /*filemtime( get_template_directory() . '/assets/main.js'),*/ true );
}

 add_action( 'wp_enqueue_scripts', 'briannelson_enqueue_scripts' )
 
?>