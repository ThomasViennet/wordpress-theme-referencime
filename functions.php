<?php
// Enqueue scripts and style from parent theme
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

// Add classes to body
add_filter('body_class', 'overlay_header');
function overlay_header($classes)
{
	// Check whether the current page should have an overlay header.
	if (is_page_template(array('templates/template-waves.php'))) {
		$classes[] = 'overlay-header';
	}
	return $classes;
}

////Customization of the login page
function edit_style_and_js()
{
	wp_enqueue_style('referencime', get_stylesheet_directory_uri() . '/style.css', false, null);

?>

	<style type="text/css">
		#login h1 a,
		.login h1 a {
			background-image: url(<?= get_stylesheet_directory_uri(); ?>/assets/img/logo-simple-referencime-nobords.png.webp);
			height: 100px;
			width: 100px;
			background-size: 100px 100px;
			background-repeat: no-repeat;
			padding-bottom: 30px;
		}

		.login form {
			overflow: visible !important;
			padding: 26px 24px 50px !important;
		}
	</style>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var loginForm = document.getElementById("loginform");
			if (loginForm) {
				loginForm.className += "background-animation";
			}
		});
	</script>
<?php }
add_action('login_enqueue_scripts', 'edit_style_and_js');

function my_login_logo_url()
{
	return home_url();
}
add_filter('login_headerurl', 'my_login_logo_url');

function my_login_logo_url_title()
{
	return 'Référencime';
}
add_filter('login_headertext', 'my_login_logo_url_title');