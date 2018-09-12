<?php get_header(); ?>
<article>
	<!-- Main -->
	<main class="page">
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile;
			?>
	</main>
</article>
<?php get_footer(); ?>