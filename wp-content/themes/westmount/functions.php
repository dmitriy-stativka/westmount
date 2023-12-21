<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// functions.php is empty so you can easily track what code is needed in order to Vite + Tailwind JIT run well

define( 'THEME_DIR', get_template_directory_uri() );

// Main switch to get frontend assets from a Vite dev server OR from production built folder
// it is recommended to move it into wp-config.php
define( 'IS_VITE_DEVELOPMENT', true );

// include "inc/inc.vite.php";

function hide_core_update_notifications_from_users() {
	if ( ! current_user_can( 'update_core' ) ) {
		remove_action( 'admin_notices', 'update_nag', 3 );
	}
}

add_action( 'admin_head', 'hide_core_update_notifications_from_users', 1 );

/**
 * Disable the emojis.
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}

add_action( 'init', 'disable_emojis' );

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array  $urls          URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 *
 * @return array                 Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' === $relation_type ) {
		// Strip out any URLs referencing the WordPress.org emoji location
		$emoji_svg_url_bit = 'https://s.w.org/images/core/emoji/';
		foreach ( $urls as $key => $url ) {
			if ( strpos( $url, $emoji_svg_url_bit ) !== false ) {
				unset( $urls[ $key ] );
			}
		}
	}

	return $urls;
}

// Disable Gutenberg on the back end.
add_filter( 'use_block_editor_for_post', '__return_false' );

// Disable Gutenberg for widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

add_action( 'wp_enqueue_scripts', function () {
	// Remove CSS on the front end.
	wp_dequeue_style( 'wp-block-library' );

	// Remove Gutenberg theme.
	wp_dequeue_style( 'wp-block-library-theme' );

	// Remove inline global CSS on the front end.
	wp_dequeue_style( 'global-styles' );
}, 20 );

add_theme_support( 'post-thumbnails' );
add_image_size( '1440', 1440, 1080, false );
add_image_size( 'extra_bg', 2048, 9999, false );

add_filter( 'xmlrpc_enabled', '__return_false' );
remove_action( 'wp_head', 'feed_links_extra', 3 ); // убирает ссылки на rss категорий
remove_action( 'wp_head', 'feed_links', 2 ); // минус ссылки на основной rss и комментарии
remove_action( 'wp_head', 'rsd_link' );  // сервис Really Simple Discovery
remove_action( 'wp_head', 'wlwmanifest_link' ); // Windows Live Writer
remove_action( 'wp_head', 'wp_generator' );  // скрыть версию wordpress
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wp_resource_hints', 2 );

show_admin_bar( false );

remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );

add_filter( 'big_image_size_threshold', '__return_false' );


function disable_classic_theme_styles() {
	wp_deregister_style( 'classic-theme-styles' );
	wp_dequeue_style( 'classic-theme-styles' );
}

add_filter( 'wp_enqueue_scripts', 'disable_classic_theme_styles', 100 );

function wps_deregister_styles() {
	wp_dequeue_style( 'global-styles' );
}

add_action( 'wp_enqueue_scripts', 'wps_deregister_styles', 100 );

add_action( 'add_meta_boxes', 'remove_page_fields', 99 );
function remove_page_fields() {
	remove_meta_box( 'commentstatusdiv', 'page', 'normal' ); // removes comments status
	remove_meta_box( 'commentsdiv', 'page', 'normal' ); // removes comments
	//remove_meta_box( 'authordiv',        'page' , 'normal' ); // removes author
}

;

function add_westmount_scripts() {
	// Подключаем JavaScript
	wp_enqueue_script( 'westmount-script',
		get_template_directory_uri() . '/assets/js/main.js',
		array( 'jquery' ),
		'1.0.0',
		true );

	// Подключаем стили CSS
	wp_enqueue_style( 'westmount-style',
		get_template_directory_uri() . '/assets/css/style.css',
		array(),
		'1.0.0',
		'all' );
}

add_action( 'wp_enqueue_scripts', 'add_westmount_scripts' );


function add_page_title_to_body_class( $classes ) {
	if ( is_singular() ) {
		global $post;
		$classes[] = $post->post_name . '-page';
	}

	return $classes;
}

add_filter( 'body_class', 'add_page_title_to_body_class' );


// function add_swiper_scripts() {
//     wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css', array(), null);
//     wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js', array(), null, true);
// }
// add_action('wp_enqueue_scripts', 'add_swiper_scripts');


load_template( get_template_directory() . '/helpers/contactFormHooks.php', true );
