<?php
/**
Template Name: Starter
*/
?>
<?php get_header(); ?>

	<div class="main_image_div">
		<?php if ( get_theme_mod('main_image') ) : ?>
			<img class="main_image" src="<?php echo esc_url(get_theme_mod('main_image')); ?>" alt="" />
		<?php else : ?>
			<img class="main_image" src="img/mainpic.svg" alt="" />
		<?php endif; ?>
	</div><!-- .main_image_div -->
	<main id="main" class="site-main" role="main">
		<div class="starter_content">
    	<?php the_post()?>
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
		</div>
	</main><!-- #main -->

<?php get_footer(); ?>
