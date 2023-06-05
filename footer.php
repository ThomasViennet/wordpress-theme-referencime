<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<div id="particle-canvas">
	<?php
	if (is_page_template(array('templates/template-waves.php', 'templates/template-cover.php', 'templates/template-netlinking.php'))) {
		echo
		'<svg class="waves-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto" transform="scale(1, -1) translate(0, -100)">
				<defs>
					<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" ></path>
				</defs>
				<g class="parallax">
					<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)"></use>
					<use xlink:href="#gentle-wave" x="48" y="1" fill="white"></use>
					<use xlink:href="#gentle-wave" x="48" y="2" fill="rgba(255,255,255,0.3)"></use>
					<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)"></use>
					<use xlink:href="#gentle-wave" x="48" y="4" fill="white"></use>
					<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)"></use>
					<use xlink:href="#gentle-wave" x="48" y="7" fill="white"></use>
				</g>
			</svg>';
	}
	?>
	<footer id="site-footer" class="header-footer-group">
		<div class="section-inner">
			<div class="footer-credits">

				<p class="footer-copyright">
					Contacts 👋<br>
					<a href="tel:+33618669749">06 18 66 97 49</a><br>
					<a href="mailto:contact@referencime.fr">contact@referencime.fr</a><br>
					<a href="https://referencime.fr/consultant-seo-marseille-pour-votre-referencement-naturel/">Consultant SEO à Marseille</a><br>
					<br>
					<a href="/politique-de-confidentialite/">Politique de confidentialité & Mentions légales</a><br>
					<br>
					&copy;
					<?php
					echo date_i18n(
						/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
						_x('Y', 'copyright date format', 'twentytwenty')
					);
					?>
					<?php bloginfo('name'); ?>
				</p><!-- .footer-copyright -->

			</div><!-- .footer-credits -->

			<a class="to-the-top" href="#site-header">
				<span class="to-the-top-long">
					<?php
					/* translators: %s: HTML character for up arrow. */
					printf(__('To the top %s', 'twentytwenty'), '<span class="arrow" aria-hidden="true">&uarr;</span>');
					?>
				</span><!-- .to-the-top-long -->
				<span class="to-the-top-short">
					<?php
					/* translators: %s: HTML character for up arrow. */
					printf(__('Up %s', 'twentytwenty'), '<span class="arrow" aria-hidden="true">&uarr;</span>');
					?>
				</span><!-- .to-the-top-short -->
			</a><!-- .to-the-top -->

		</div><!-- .section-inner -->
	</footer><!-- #site-footer -->
</div>
<script type="text/javascript" src="http://localhost:8888/referencime.fr/wp-content/themes/referencime/assets/js/netlinking.js"></script>
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
<?php wp_footer(); ?>

</body>

</html>