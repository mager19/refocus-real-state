<?php
function refocus_real_focus_scripts()
{
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;500;700&display=swap');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/dist/css/app.css', array(), '1.0', 'all');
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/dist/js/app.js', array('jquery'), '0.1', true);
}
add_action('wp_enqueue_scripts', 'refocus_real_focus_scripts');
