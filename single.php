<?php get_header(); ?>
<?php
    $main_class;
    if(is_home()):
        $main_class = 'home';
    else:
        $main_class = get_post_type();
    endif;

    $post_type = get_post_type();
    $format = $single_format[$post_type];
?>

<article>
    <main class="single <?php echo $main_class;?>">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content-single', get_post_type() ); ?>
		<?php endwhile;?>
    </main>
</article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
