<?php
/**
 * The template part for displaying video
 *
 * @package WordPress
 * @subpackage Visual_Composer_Theme
 * @since Visual Composer Theme 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('entry-preview'); ?>>
	<div class="featured-content">
		<div class="video-wrapper">
			<?php the_content( '', TRUE );?>
		</div>
	</div><!--.featured-content-->

	<?php visualcomposertheme_entry_meta(); ?>

	<div class="entry-content">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php echo get_the_content( '', FALSE ); ?>
	</div><!--.entry-content-->
	<?php if( ! is_singular() ):?>
		<a href="<?php echo get_permalink( get_the_ID() ) ?>" class="blue-button read-more"><?php echo __('Read More', 'visual-composer-theme') ?></a>
	<?php endif;?>
</article><!--.entry-preview-->

