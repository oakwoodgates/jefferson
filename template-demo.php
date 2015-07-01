<?php
/**
 * Template Name: Demo Page
 *
 */
?>
<?php get_header(); ?>

<?php /* <div <?php hybrid_attr( 'site-inner' ); ?>> */?>

	<?php tha_content_before(); ?>

	<main <?php hybrid_attr( 'content' ); ?>>

		<?php tha_content_top(); ?>

		<?php /* hybrid_get_menu( 'breadcrumbs' ); */ ?>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php tha_entry_before(); ?>

				<?php hybrid_get_content_template(); ?>

				<?php do_action( 'wds_page_builder_load_parts' ); ?>

				<?php // get_template_part( 'content/blocks/vertical-tabs' ); ?>

				<?php tha_entry_after(); ?>

				<?php comments_template( '', true ); ?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'content/error' ); ?>

		<?php endif; ?>

		<?php tha_content_bottom(); ?>

	</main><!-- #content -->

	<?php tha_content_after(); ?>

	<?php hybrid_get_sidebar( 'primary' ); ?>

<?php /* </div><!-- #site-inner --> */ ?>

<?php
get_footer();