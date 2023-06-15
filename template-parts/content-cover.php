<?php

/**
 * Displays the content when the cover template is used.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php
	// On the cover page template, output the cover header.
	$cover_header_style   = '';
	$cover_header_classes = '';

	$color_overlay_style   = '';
	$color_overlay_classes = '';

	$image_url = !post_password_required() ? get_the_post_thumbnail_url(get_the_ID(), 'twentytwenty-fullscreen') : '';

	if ($image_url) {
		$cover_header_style   = ' style="background-image: url( ' . esc_url($image_url) . ' );"';
		$cover_header_classes = ' bg-image';
	}

	// Get the color used for the color overlay.
	$color_overlay_color = get_theme_mod('cover_template_overlay_background_color');
	if ($color_overlay_color) {
		$color_overlay_style = ' style="color: ' . esc_attr($color_overlay_color) . ';"';
	} else {
		$color_overlay_style = '';
	}

	// Get the fixed background attachment option.
	if (get_theme_mod('cover_template_fixed_background', true)) {
		$cover_header_classes .= ' bg-attachment-fixed';
	}

	// Get the opacity of the color overlay.
	$color_overlay_opacity  = get_theme_mod('cover_template_overlay_opacity');
	$color_overlay_opacity  = (false === $color_overlay_opacity) ? 70 : $color_overlay_opacity;
	$color_overlay_classes .= ' opacity-' . $color_overlay_opacity;
	?>

	<div id="cover" class="cover-header <?php echo $cover_header_classes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output 
										?>" <?php echo $cover_header_style; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- We need to double check this, but for now, we want to pass PHPCS ;) 
											?>>
		<div class="cover-header-inner-wrapper <?= !is_page_template(array('templates/template-waves.php')) ? 'screen-height' : ''; ?>">

			<div class="cover-header-inner">
				<div class="cover-color-overlay color-accent<?php echo esc_attr($color_overlay_classes); ?>" <?php echo $color_overlay_style; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- We need to double check this, but for now, we want to pass PHPCS ;) 
																												?>></div>

				<header class="entry-header has-text-align-center">
					<div class="entry-header-inner section-inner medium">

						<?php

						/**
						 * Allow child themes and plugins to filter the display of the categories in the article header.
						 *
						 * @since Twenty Twenty 1.0
						 *
						 * @param bool Whether to show the categories in article header. Default true.
						 */
						$show_categories = apply_filters('twentytwenty_show_categories_in_entry_header', true);

						if (true === $show_categories && has_category()) {
						?>

							<div class="entry-categories">
								<span class="screen-reader-text">
									<?php
									/* translators: Hidden accessibility text. */
									_e('Categories', 'twentytwenty');
									?>
								</span>
								<div class="entry-categories-inner">
									<?php the_category(' '); ?>
								</div><!-- .entry-categories-inner -->
							</div><!-- .entry-categories -->

						<?php
						}

						the_title('<h1 class="entry-title">', '</h1>');

						if (is_page() && !is_page_template(array('templates/template-waves.php'))) {
						?>

							<div class="to-the-content-wrapper">

								<a href="#post-inner" class="to-the-content fill-children-current-color">
									<?php twentytwenty_the_theme_svg('arrow-down'); ?>
									<div class="screen-reader-text">
										<?php
										/* translators: Hidden accessibility text. */
										_e('Scroll Down', 'twentytwenty');
										?>
									</div>
								</a><!-- .to-the-content -->

							</div><!-- .to-the-content-wrapper -->

							<?php
						} else {

							$intro_text_width = '';

							if (is_singular()) {
								$intro_text_width = ' small';
							} else {
								$intro_text_width = ' thin';
							}

							if (has_excerpt()) {
							?>

								<div class="intro-text section-inner max-percentage<?php echo esc_attr($intro_text_width); ?>">
									<?php the_excerpt(); ?>
								</div>

						<?php
							}

							twentytwenty_the_post_meta(get_the_ID(), 'single-top');
						}
						?>

					</div><!-- .entry-header-inner -->
				</header><!-- .entry-header -->

			</div><!-- .cover-header-inner -->
			<?php

			?>
			<?php
			if (is_page_template(array('templates/template-waves.php', 'templates/template-cover.php'))) {
				echo
				'<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
					<defs>
						<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
					</defs>
					<g class="parallax">
						<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7"></use>
						<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)"></use>
						<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)"></use>
						<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff"></use>
					</g>
				</svg>';
			}
			?>
		</div><!-- .cover-header-inner-wrapper -->

	</div><!-- .cover-header -->

	<div class="post-inner" id="post-inner">
	<div class="grid-wrapper">
<div class="grid-inner">
<div class="grid-inner-content">
<nav id="course-timeline" class="timeline">
<div class="timeline__inner">
<span class="timeline__iconContainer">
<a href="/fr/courses/7882631-allez-plus-loin-avec-wordpress" title="Retour sur le sommaire du cours" class="roundIcon timeline__roundIcon">
<i class="icon-home roundIcon__icon"></i>
</a>
</span>
<div class="timeline__steps">
<span class="timeline__splitChapter"></span>
<a href="/fr/courses/7882631-allez-plus-loin-avec-wordpress/8056759-tirez-un-maximum-de-ce-cours" class="timeline__step timeline__step--completed" title="Tirez un maximum de ce cours">
<span class="timeline__stepName">
Tirez un maximum de ce cours
</span>
 </a>
<a href="/fr/courses/7882631-allez-plus-loin-avec-wordpress/8056865-installez-wordpress" class="timeline__step timeline__step--completed" title="Installez WordPress">
<span class="timeline__stepName">
Installez WordPress
</span>
</a>
<a href="/fr/courses/7882631-allez-plus-loin-avec-wordpress/8057030-creez-installez-et-parametrez-un-theme-enfant" class="timeline__step timeline__step--completed" title="Créez, installez et paramétrez un thème enfant">
<span class="timeline__stepName">
Créez, installez et paramétrez un thème enfant
</span>
</a>
<a href="/fr/courses/7882631-allez-plus-loin-avec-wordpress/8057131-creez-une-page-d-accueil-grace-a-gutenberg" class="timeline__step timeline__step--completed" title="Créez une page d’accueil grâce à Gutenberg">
<span class="timeline__stepName">
Créez une page d’accueil grâce à Gutenberg
</span>
</a>
<a href="/fr/courses/7882631-allez-plus-loin-avec-wordpress/exercises/4744" class="timeline__step js-current-timeline-step" title="Quiz : Installer un thème enfant">
<span class="timeline__stepName">
Quiz : Installer un thème enfant
</span>
<span class="timeline__progressMarker"></span>
</a>
<span class="timeline__splitChapter"></span>
<a href="/fr/courses/7882631-allez-plus-loin-avec-wordpress/8057489-personnalisez-le-template-du-theme-enfant" class="timeline__step timeline__step--completed" title="Personnalisez le template du thème enfant">
 <span class="timeline__stepName">
Personnalisez le template du thème enfant
</span>
</a>
<a href="/fr/courses/7882631-allez-plus-loin-avec-wordpress/8057582-creez-un-template-de-page" class="timeline__step timeline__step--completed" title="Créez un template de page">
<span class="timeline__stepName">
Créez un template de page
</span>
</a>
<a href="/fr/courses/7882631-allez-plus-loin-avec-wordpress/8057691-creez-des-articles-categorises" class="timeline__step timeline__step--completed" title="Créez des articles catégorisés">
<span class="timeline__stepName">
Créez des articles catégorisés
</span>
</a>
<a href="/fr/courses/7882631-allez-plus-loin-avec-wordpress/8057883-modifiez-le-comportement-des-articles-avec-les-hooks" class="timeline__step timeline__step--completed" title="Modifiez le comportement des articles avec les hooks">
<span class="timeline__stepName">
Modifiez le comportement des articles avec les hooks
</span>
</a>
<a href="/fr/courses/7882631-allez-plus-loin-avec-wordpress/exercises/4745" class="timeline__step" title="Quiz : Enrichir un thème WordPress avec HTML, CSS et PHP">
<span class="timeline__stepName">
Quiz : Enrichir un thème WordPress avec HTML, CSS et PHP
</span>
</a>
<span class="timeline__splitChapter"></span>
<a href="/fr/courses/7882631-allez-plus-loin-avec-wordpress/8058206-mettez-en-place-le-mode-debug-pour-analyser-une-erreur" class="timeline__step timeline__step--completed" title="Mettez en place le mode debug pour analyser une erreur">
<span class="timeline__stepName">
Mettez en place le mode debug pour analyser une erreur
</span>
</a>
<a href="/fr/courses/7882631-allez-plus-loin-avec-wordpress/8058310-analysez-vos-requetes-avec-query-monitor" class="timeline__step timeline__step--completed" title="Analysez vos requêtes avec Query Monitor">
<span class="timeline__stepName">
Analysez vos requêtes avec Query Monitor
</span>
</a>
<a href="/fr/courses/7882631-allez-plus-loin-avec-wordpress/8058393-gerez-un-plugin-corrompu-ou-bugge" class="timeline__step timeline__step--completed" title="Gérez un plugin corrompu ou buggé">
<span class="timeline__stepName">
Gérez un plugin corrompu ou buggé
</span>
</a>
<a href="/fr/courses/7882631-allez-plus-loin-avec-wordpress/8058473-evitez-le-piratage-du-site" class="timeline__step timeline__step--completed" title="Évitez le piratage du site">
<span class="timeline__stepName">
Évitez le piratage du site
</span>
</a>
<a href="/fr/courses/7882631-allez-plus-loin-avec-wordpress/8058514-conclusion" class="timeline__step timeline__step--completed" title="Conclusion">
<span class="timeline__stepName">
Conclusion
</span>
</a>
<a href="/fr/courses/7882631-allez-plus-loin-avec-wordpress/exercises/4746" class="timeline__step" title="Quiz : Débugger un site WordPress">
<span class="timeline__stepName">
Quiz : Débugger un site WordPress
</span>
</a>
<span class="timeline__splitChapter"></span>
</div>
<span class="timeline__iconContainer">
<a href="/fr/courses/7882631/certificate_example" title="Certificat de réussite (voir un exemple)" class="roundIcon timeline__roundIcon">
<i class="icon-trophy roundIcon__icon"></i>
</a>
</span>
</div>
</nav>
</div>
</div>
</div>
		<div class="entry-content">

			<?php
			the_content();
			?>

		</div><!-- .entry-content -->
		<?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__('Page', 'twentytwenty') . '"><span class="label">' . __('Pages:', 'twentytwenty') . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

		edit_post_link();
		// Single bottom post meta.
		twentytwenty_the_post_meta(get_the_ID(), 'single-bottom');

		if (post_type_supports(get_post_type(get_the_ID()), 'author') && is_single()) {

			get_template_part('template-parts/entry-author-bio');
		}
		?>

	</div><!-- .post-inner -->

	<?php

	if (is_single()) {

		get_template_part('template-parts/navigation');
	}

	/*
	 * Output comments wrapper if it's a post, or if comments are open,
	 * or if there's a comment number – and check for password.
	 */
	if ((is_single() || is_page()) && (comments_open() || get_comments_number()) && !post_password_required()) {
	?>

		<div class="comments-wrapper section-inner">

			<?php comments_template(); ?>

		</div><!-- .comments-wrapper -->

	<?php
	}
	?>
</article><!-- .post -->