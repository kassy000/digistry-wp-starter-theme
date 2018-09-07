
<div class="post-<?php echo get_post_type() ?>">
    <?php
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/contents-loop', get_post_type());
        endwhile;
    ?>
</div>
