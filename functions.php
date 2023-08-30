<?php

/**
 * refocus_real_focus First functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package refocus_real_focus
 */


/** Setup **/
require('inc/setup.php');

/** Enqueue scripts and styles.**/
require('inc/scripts.php');

/** Shortcodes Theme **/
require('inc/shortcodes.php');

/**  Custom Pagination Function **/
require('inc/pagination.php');

/**  Social Shared Icons Function **/
require('inc/shared-social.php');

/** Author Fields **/
require('inc/author-fields.php');

/** Yoast Meta Description and page titles **/
require('inc/yoast-meta-description.php');

/** CTA'S post type **/
require('inc/cta-post-type.php');


if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'  => __('Theme Options'),
        'menu_title'  => __('Theme Options'),
        'redirect'    => false,
    ));
}

/** ACF Custom functions **/
require('inc/functions/custom-functions.php');

function add_file_types_to_uploads($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

/**
 * Register ACF Blocks
 */
require get_template_directory() . '/blocks/register-blocks.php';
