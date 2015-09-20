<?php
/**
Template Name: Starter
*/
?>
<?php get_header(); ?>

	<div class="mainpicture">
		<?php if ( get_theme_mod('main_image') ) : ?>
			<img class="main_image" src="<?php echo esc_url(get_theme_mod('main_image')); ?>" alt="" />
		<?php else : ?>
		<?php endif; ?>
	</div>
	<main id="main" class="site-main" role="main">
    <?php the_post()?>
		<?php get_template_part( 'template-parts/content', 'page' ); ?>
	</main><!-- #main -->

<?php get_footer(); ?>
