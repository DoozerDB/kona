<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kona
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<!--<div class="container">-->
			<div class="footer_col1">
				Кона</br>
				(c)2015
			</div>
			<div class="footer_col2">
				<?php get_sidebar() ?>
			</div>
			<div class="footer_col3">
				<a class="contactphone" href="tel: <?php echo get_theme_mod( 'kona_phone0','' ); ?>" title="<?php echo get_theme_mod( 'kona_phone0','' ); ?>"><?php echo get_theme_mod( 'kona_phone0','' ); ?></a></br>
				<a class="contactphone" href="tel: <?php echo get_theme_mod( 'kona_phone1','' ); ?>" title="<?php echo get_theme_mod( 'kona_phone1','' ); ?>"><?php echo get_theme_mod( 'kona_phone1','' ); ?></a></br>
				<a class="contactphone" href="tel: <?php echo get_theme_mod( 'kona_phone2','' ); ?>" title="<?php echo get_theme_mod( 'kona_phone2','' ); ?>"><?php echo get_theme_mod( 'kona_phone2','' ); ?></a>
			</div>
		<!--</div>-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
