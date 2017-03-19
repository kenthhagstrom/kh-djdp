<?php
/*
Plugin Name: Disable Jetpack Device Pixels Support
Plugin URI: 
Description: Remove annoying jetpack js script that's really not needed
Version: 0.1.0
Author: Kenth Hagström
Author URI: https://kenthhagstrom.se
*/
function remove_devicepx() {
    wp_dequeue_script( 'devicepx' );
}
add_action( 'wp_enqueue_scripts', 'remove_devicepx' );