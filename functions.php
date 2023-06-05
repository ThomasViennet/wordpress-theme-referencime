<?php
// enqueue scripts and style from parent theme
add_action('wp_enqueue_scripts', 'theme_enqueue');
function theme_enqueue()
{
	//CSS
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

	//JS
	wp_enqueue_script('yoast-faq', get_stylesheet_directory_uri() . '/assets/js/yoast-faq.js', ['jquery'], filemtime(get_stylesheet_directory() . '/assets/js/yoast-faq.js'));
	wp_enqueue_script('navigation', get_stylesheet_directory_uri() . '/assets/js/navigation.js', ['jquery'], filemtime(get_stylesheet_directory() . '/assets/js/navigation.js'));
	wp_enqueue_script('highlight', get_stylesheet_directory_uri() . '/assets/js/highlight.js', ['jquery'], filemtime(get_stylesheet_directory() . '/assets/js/highlight.js'), true);
	wp_enqueue_script('netlinking', get_stylesheet_directory_uri() . '/assets/js/netlinking.js', ['jquery'], filemtime(get_stylesheet_directory() . '/assets/js/netlinking.js'), true);
}

// add classes to body
add_filter('body_class', 'overlay_header');
function overlay_header($classes)
{
	// Check whether the current page should have an overlay header.
	if (is_page_template(array('templates/template-waves.php', 'templates/template-netlinking.php'))) {
		$classes[] = 'overlay-header';
	}
	return $classes;
}
