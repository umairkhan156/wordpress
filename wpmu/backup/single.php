<?php
/* The file for displaying single posts */
?>

<?php get_header(); ?>
		
	<div class="main">
		
		<div id="content" class="two-thirds left">

			<?php get_template_part( 'include/loop', 'single' ); ?>

		</div><!-- #content -->

		
<?php get_sidebar(); ?>

<?php get_footer(); ?>
