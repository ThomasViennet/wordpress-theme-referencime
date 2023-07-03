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
	<footer id="site-footer" class="header-footer-group">
	<?php
	if (is_page_template(array('templates/template-waves.php', 'templates/template-cover.php'))) {
		echo
		'<svg class="waves-footer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
		<defs>
			<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
		</defs>
		<g class="parallax">
			<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(34,46,90,0.7"></use>
			<use xlink:href="#gentle-wave" x="48" y="1" fill="rgb(34,46,90)"></use>
			<use xlink:href="#gentle-wave" x="48" y="2" fill="rgba(34,46,90,0.3)"></use>
			<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(34,46,90,0.5)"></use>
			<use xlink:href="#gentle-wave" x="48" y="4" fill="rgb(34,46,90)"></use>
			<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(34,46,90,0.3)"></use>
			<use xlink:href="#gentle-wave" x="48" y="6" fill="rgba(34,46,90,0.7"></use>
			<use xlink:href="#gentle-wave" x="48" y="7" fill="rgb(34,46,90)"></use>
		</g>
	</svg>';
	}
	?>
		<div class="section-inner">
			<div class="footer-credits">
				<p id="highlight-effect" class="footer-copyright">
				<span class="highlight"> Contacts 👋 </span><br>
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

		</div><!-- .section-inner -->
	</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>

</html>