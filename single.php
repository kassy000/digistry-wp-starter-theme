<?php get_header(); ?>
<div id="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content-single', get_post_type() ); ?>
		<?php endwhile;?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
