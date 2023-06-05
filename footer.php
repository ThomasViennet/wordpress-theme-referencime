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

<?php if (is_page_template(array('templates/template-netlinking.php'))) {
	echo '
		
		<script type="text/javascript" src="http://localhost:8888/referencime.fr/wp-content/themes/referencime/assets/js/netlinking.js"></script>
		<script type="text/javascript">
			var canvasDiv = document.getElementById(\'particle-canvas\');
			var options = {
				particleColor: \'#fff\',
				interactive: true,
				speed: \'slow\',
				density: \'high\'
			};
			var particleCanvas = new ParticleNetwork(canvasDiv, options);
		</script>';
} ?>
<?php wp_footer(); ?>

</body>

</html>