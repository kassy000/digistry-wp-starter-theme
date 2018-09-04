<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <button type="button" class="navbar-toggle collapsed js-offcanvas-btn" >
        <span class="sr-only">Toggle navigation</span>
        <span class="hiraku-open-btn-line"></span>
    </button>
    sdfsdfsdfsdfs

    <nav class="offcanvas-nav offcanvas-right" role="navigation">
	    <?php
	    wp_nav_menu( array(
		    'theme_location'  => 'primary',
		    //'menu_id' => 'primary-menu',
		    'depth'             => 3,
		    'menu_class'        => '',
		    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	    ));
	    ?>
    </nav>

    <div class="container">
        <div class="content">
            <!-- Header start -->
            <header>

                <div>
                    <a class="logo" href="<?php echo home_url() ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/logo.svg" alt="<?php bloginfo( 'name' ); ?>"></a>
                    <!-- Navigation -->
                </div>
                <nav class="main-nav" role="navigation">
                    <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'primary',
                        //'menu_id' => 'primary-menu',
                        'depth'             => 3,
                        'menu_class'        => '',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    ));
                    ?>
                </nav>
            </header>
            <!-- Header end -->

            <!-- Main -->
            <main>
