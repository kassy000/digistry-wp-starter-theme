<?php

global $text_domain_name,$assets_dir;
$text_domain_name = 'digistry';
$assets_dir = '/assets/';
$npm_dir = '/node_modules/';


/**
 * Setup.
 */

if ( ! function_exists( $text_domain_name . '_setup' ) ) :

function digistry_setup() {

	global $text_domain_name;
	// Set  Text Domain
	load_theme_textdomain( $text_domain_name );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	//Enable support for custom logo.
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	//Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'jbp' ),
		'social'  => __( 'Social Links Menu', 'jbp' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	//Enable support for Post Formats.
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );


	//This theme styles the visual editor to resemble the theme style,
	//add_editor_style( array( $assets_dir . 'css/editor-style.css', text_domain_fonts_url() ) );

}
endif; // theme_setup
add_action( 'after_setup_theme', $text_domain_name . '_setup' );

/**
 * Enqueues scripts and styles.
 */

if(!function_exists($text_domain_name . '_scripts')):

function digistry_scripts() {

	global $npm_dir;
	// Theme stylesheet.
	wp_enqueue_style( 'digisty-sanitize', get_template_directory_uri() . $npm_dir . 'sanitize.css/sanitize.css');
	wp_enqueue_style( 'digisty-bootstrap', get_template_directory_uri() . $npm_dir . 'bootstrap/dist/css/bootstrap.min.css');
	//wp_enqueue_style( $text_domain_name . '-slicknav', get_stylesheet_directory_uri() . $npm_dir . 'slicknav/dist/slicknav.css');
	//wp_enqueue_style( 'parent-mmenu', get_template_directory_uri() . $npm_dir . 'jquery.mmenu/dist/jquery.mmenu.css');
	//wp_enqueue_style( 'parent-mmenu', get_template_directory_uri() . $npm_dir . 'jquery.mmenu/dist/jquery.mmenu.all.css');
	//wp_enqueue_style( 'parent-slidebars', get_template_directory_uri() . $npm_dir . 'Slidebars/dist/slidebars.min.css');
	//wp_enqueue_style( 'parent-drawer', get_template_directory_uri() . $npm_dir . 'jquery-drawer/dist/css/drawer.min.css');
	wp_enqueue_style( 'digisty-hiraku', get_template_directory_uri() . $npm_dir . 'hiraku/css/hiraku.min.css');
	wp_enqueue_style( 'digisty-slick', get_template_directory_uri() . $npm_dir . 'slick-carousel/slick/slick.css');
	wp_enqueue_style( 'digisty-slick-theme', get_template_directory_uri() . $npm_dir . 'slick-carousel/slick/slick-theme.css');
	wp_enqueue_style( 'digisty-style', get_template_directory_uri() . '/style.css');


	wp_enqueue_script( 'digisty-jquery-easing', get_template_directory_uri() . $npm_dir . 'jquery-easing/dist/jquery.easing.1.3.umd.min.js');
	wp_enqueue_script( 'digisty-bootstrap', get_template_directory_uri() . $npm_dir . 'bootstrap/dist/js/bootstrap.min.js');
	wp_enqueue_script( 'digisty-slick', get_template_directory_uri() . $npm_dir . 'slick-carousel/slick/slick.min.js');
	//wp_enqueue_script( 'parent-mmenu', get_template_directory_uri() . $npm_dir . 'jquery.mmenu/dist/jquery.mmenu.all.js');
	//wp_enqueue_script( 'parent-slidebars', get_template_directory_uri() . $npm_dir . 'Slidebars/dist/slidebars.js');
	//wp_enqueue_script( 'parent-iscroll', get_template_directory_uri() . $npm_dir . 'iscroll/build/iscroll.js');
	//wp_enqueue_script( 'parent-slidebars', get_template_directory_uri() . $npm_dir . 'jquery-drawer/dist/js/drawer.min.js');
	wp_enqueue_script( 'digisty-hiraku', get_template_directory_uri() . $npm_dir . 'hiraku/js/jquery-hiraku.min.js');
	wp_enqueue_script( 'digisty-jquery-lazyload', get_template_directory_uri() . $npm_dir . 'jquery-lazyload/jquery.lazyload.js');
	wp_enqueue_script( 'digisty-master', get_template_directory_uri() . '/master.js');

}
endif;
add_action( 'wp_enqueue_scripts', $text_domain_name . '_scripts' );



/**
 * 管理画面のロゴ変更
 */

if(!function_exists($text_domain_name . '_login_logo_image')):
function digistry_login_logo_image() {
    echo '<style type="text/css">
            #login h1 a {
                background: url(' . get_stylesheet_directory_uri() . '/assets/img/admin/login_logo.svg) no-repeat center center !important;
				width: 128px;
				height: 128px;
            }
    </style>';
}
endif;
add_action('login_head', $text_domain_name . '_login_logo_image');

/**
 * SVGをアップロード可能にする
 */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


/**
 * Excerpt Length
 */
function digistry_custom_excerpt_length( $length ) {
 	return 100;
}
add_filter( 'excerpt_length', 'text_domain_custom_excerpt_length', 999 );

/**
 * Custom template tags for this theme.
 */
//require get_stylesheet_directory_uri() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
//require get_stylesheet_directory_uri() . '/inc/customizer.php';




//remove_filter('the_content', 'wpautop');　// 記事の自動整形を無効にする
//remove_filter('the_excerpt', 'wpautop');　// 抜粋の自動整形を無効にする

/**
 * Types カスタムフィールドの値を取得
 */

function digistry_get_field_params($prefix, $arg){
	$arr = array();
	foreach($arg as $field){

		$field_name = $prefix . $field['name'];
		$options = array();
		if(isset($field['type'])){
			if($field['type'] == 'img'){
				$options['url'] = 'true';
			}
			if($field['type'] == 'url'){
				$options['output'] = 'raw';
			}
		}


		$shortcode = '[types field="' . $field_name .'"';
		if(isset($field['type'])){
			if($field['type'] == 'img'){
				$shortcode .= ' url=true';
			}elseif($field['type'] == 'url'){
				$shortcode .= ' output=raw';
			}
		}

		if(isset($field['multiple'])){
			if($field['multiple']){
				$shortcode .= ' separator=","';
				$shortcode .= ' output="html"';
			}
		}

		$shortcode .= '][/types]';
		$param = do_shortcode($shortcode);

		if(isset($field['multiple'])){
			if($field['multiple']){
				$param = explode(',' , strip_tags($param));
			}
		}

		$arr[$field['name']] = $param;
	}

	return $arr;
}


add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
        return $data;
    }

    $filetype = wp_check_filetype( $filename, $mimes );

    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];

}, 10, 4 );
