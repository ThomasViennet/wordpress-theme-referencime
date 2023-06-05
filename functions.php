<?php
// enqueue scripts and style from parent theme
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
	//CSS
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

	//JS
	wp_enqueue_script('yoast-faq', get_stylesheet_directory_uri() . '/assets/js/yoast-faq.js', ['jquery'], filemtime(get_stylesheet_directory() . '/assets/js/yoast-faq.js'));
	wp_enqueue_script('navigation', get_stylesheet_directory_uri() . '/assets/js/navigation.js', ['jquery'], filemtime(get_stylesheet_directory() . '/assets/js/navigation.js'));
	wp_enqueue_script('netlinking', get_stylesheet_directory_uri() . '/assets/js/netlinking.js', ['jquery'], filemtime(get_stylesheet_directory() . '/assets/js/netlinking.js'));
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

function netlinking_footer()
{
?>
	<script type="text/javascript">
		var canvasDiv = document.getElementById('particle-canvas');
		var options = {
			particleColor: '#fff',
			interactive: true,
			speed: 'slow',
			density: 'high'
		};
		var particleCanvas = new ParticleNetwork(canvasDiv, options);
	</script>
<?php
}
add_action('wp_footer', 'netlinking_footer');
