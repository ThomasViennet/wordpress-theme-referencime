<?php
/* enqueue scripts and style from parent theme */
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));
	wp_enqueue_script('yoast-faq', get_stylesheet_directory_uri() . '/assets/js/yoast/yoast-faq.js', ['jquery'], filemtime(get_stylesheet_directory() . '/assets/js/yoast/yoast-faq.js'));
}

// function theme_enqueue_js() {
// 	wp_enqueue_script('fcp-yft', get_template_directory_uri() . '/assets/js/yoast/yoast-faq.js', ['jquery'], filemtime(get_stylesheet_directory()) . '/assets/js/yoast/yoast-faq.js');
// }
