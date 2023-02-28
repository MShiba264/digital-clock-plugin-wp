<?php
/*
Plugin Name:  Digital Clock
Description: This plugin displays a digital alarm clock on your WordPress site using JavaScript.
Version: 1.0
Author: MShiba264
Author URI: https://yourwebsite.com/
*/

class Digital_Clock
{
    public function __construct()
        {
        add_shortcode('digital_clock', array($this, 'digital_clock_shortcode'));
        add_action('wp_enqueue_scripts', array($this, 'digital_clock_scripts'));
        }

    // Add a shortcode for the digital clock
    public function digital_clock_shortcode()
        {
        // Return the digital clock HTML
        return '<div id="clock"><span></span></div>';
        }

    // Add scripts and styles for the digital clock
    public function digital_clock_scripts()
        {
        wp_enqueue_script('digital-clock', plugin_dir_url(__FILE__) . 'js/digital-clock.js', array(), false, true);
        wp_enqueue_style('digital-clock', plugin_dir_url(__FILE__) . 'css/style.css', array(), false);
        }
}

// Instantiate the Digital_Clock class
add_action('plugins_loaded', 'digital_clock_init');
function digital_clock_init()
    {
    new Digital_Clock();
    }
