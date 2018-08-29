	        </main><!-- #main -->
        </div>
        <footer>
            <nav class="footer-nav">
		        <?php
		        wp_nav_menu( array(
			        'theme_location'  => 'primary',
			        'menu_id' => 'primary-menu',
			        'depth'             => 3,
			        'menu_class'        => '',
			        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		        ));
		        ?>
            </nav>
        </footer>
    </div>
	<?php wp_footer(); ?>
</body>
</html>
