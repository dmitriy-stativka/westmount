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


load_template(get_template_directory() . '/helpers/contactFormHooks.php', true);


function register_my_menus() {
	register_nav_menus(
	  array(
		'footer-menu-1' => __( 'Footer Menu 1' ),
		'footer-menu-2' => __( 'Footer Menu 2' )
	  )
	);
}
add_action( 'init', 'register_my_menus' );

function my_wp_setup() {
    add_theme_support( 'menus' );
    add_filter( 'wp_nav_menu_args', 'my_description_in_nav_menu', 20, 1 );
}
add_action( 'after_setup_theme', 'my_wp_setup' );

function my_description_in_nav_menu( $args ) {
    $args['walker'] = new Footer_Menu_Walker();
    return $args;
}

  
class Footer_Menu_Walker extends Walker_Nav_Menu {
    
    function start_lvl(&$output, $depth = 0, $args = array()) {
        if ($depth == 0) { 
            $output .= "<ul>\n";
        }
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        global $build_folder; 

        if ($depth == 0 && $item->url == '#') { 
            $output .= '<h4 class="footer-nav__title">' .
                       '<svg width="11" height="11">' .
                       '<use href="' . esc_attr($build_folder) . 'img/sprite/sprite.svg#label_icon"></use>' .
                       '</svg>' .
                       esc_html($item->title) .
                       '</h4>';
        } elseif ($depth == 0) {
            $output .= '<li><a href="' . esc_attr($item->url) . '">' . esc_html($item->title) . '</a></li>';
        } else {
            $output .= '<li><a href="' . esc_attr($item->url) . '">' . esc_html($item->title) . '</a></li>';
        }
    }

    function end_lvl(&$output, $depth = 0, $args = array()) {
        if ($depth == 0) {
            $output .= "</ul>\n";
        }
    }

    function end_el(&$output, $item, $depth = 0, $args = array()) {
    }
}


function events() {
    $labels = array(
        'name'               => 'Events',
        'singular_name'      => 'Events',
        'menu_name'          => 'Events',
        'add_new'            => 'Add new',
        'add_new_item'       => 'Add new event',
        'edit_item'          => 'Edit event',
        'new_item'           => 'New event',
        'view_item'          => 'Event',
        'search_items'       => 'Search events',
        'not_found'          => 'Not found',
        'not_found_in_trash' => 'Not found',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'menu_icon'           => 'dashicons-book',
        'rewrite'             => array('slug' => 'events-posts'),
        'supports'            => array('title', 'editor', 'thumbnail', 'custom-fields'),
    );

    register_post_type('events', $args);
}

add_action('init', 'events');



function events_taxonomy() {
    $labels = array(
        'name'              => 'Event Types',
        'singular_name'     => 'Event Type',
        'search_items'      => 'Search Event Types',
        'all_items'         => 'All Event Types',
        'parent_item'       => 'Parent Event Type',
        'parent_item_colon' => 'Parent Event Type:',
        'edit_item'         => 'Edit Event Type', 
        'update_item'       => 'Update Event Type',
        'add_new_item'      => 'Add New Event Type',
        'new_item_name'     => 'New Event Type Name',
        'menu_name'         => 'Event Types',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'event-type'),
    );

    register_taxonomy('event_type', array('events'), $args);
}

add_action('init', 'events_taxonomy');


function add_ajax_scripts() {
    wp_enqueue_script('my-ajax-handle', get_template_directory_uri() . '/ajax-filter.js', array());
    wp_localize_script('my-ajax-handle', 'my_ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'add_ajax_scripts');


function filter_events_callback() {
    $term_id = isset($_POST['term_id']) ? intval($_POST['term_id']) : '';

    $args = array(
        'post_type' => 'events',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC'
    );

    if ($term_id != 'all') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'event_type',
                'field' => 'term_id',
                'terms' => $term_id
            )
        );
    }

    $query = new WP_Query($args);

    echo '<ul class="events-box__list">';
    while ($query->have_posts()): $query->the_post(); ?>
        <li class="events-box__item">
            <div class="event-card">
                <div class="event-card__coll">
                    <?php 
                        $acf_date = get_field('date');
                        $date = DateTime::createFromFormat('d/m/Y', $acf_date);
                        $formatted_date = $date->format('d') . ' <i>' . $date->format('F Y') . '</i>';
                        echo '<span class="current-events__date">' . $formatted_date . '</span>';
                    ?>

                    <div class="event-card__image">
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('custom-size', array('class' => 'event-card__image', 'width' => 445, 'height' => 256, 'size' => '1440')); ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="event-card__info">
                    <span class="event-card__title">
                        <?php the_title(); ?>
                    </span>

                    <div class="event-card__bottom">
                        <span class="events-label">
                            <svg width="11" height="11">
                                <use href="<?php echo get_template_directory_uri() . '/assets/' ?>img/sprite/sprite.svg#label_icon"></use>
                            </svg>
                            <?php echo get_field('location'); ?>
                        </span>

                        <a href="<?php the_permalink(); ?>" class="article-link">
                            <svg width="14" height="11">
                                <use href="<?php echo get_template_directory_uri() . '/assets/' ?>img/sprite/sprite.svg#arrow-r"></use>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </li>
    <?php endwhile;
    echo '</ul>';
    wp_die();
}


add_action('wp_ajax_filter_events', 'filter_events_callback');
add_action('wp_ajax_nopriv_filter_events', 'filter_events_callback');


// Custom Menu Start

function register_my_menu() {
    register_nav_menu('custom-menu',__( 'Custom Menu' ));
}
add_action( 'init', 'register_my_menu' );


class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    private $sub_menu_items = array();

    function start_lvl(&$output, $depth = 0, $args = array()) {
        if ($depth == 0) {
            ob_start();
        }
    }

    function end_lvl(&$output, $depth = 0, $args = array()) {
        if ($depth == 0) {
            $sub_menu = ob_get_clean();
            $this->sub_menu_items[$this->current_item->ID] = $sub_menu;
        }
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        if ($depth == 0) {
            $this->current_item = $item;
            $data_trigger = get_field('data-trigger', $item); 
            $output .= '<li' . $this->get_item_attributes($item) . ($data_trigger ? ' data-trigger="' . esc_attr($data_trigger) . '"' : '') . '>';
            $output .= $this->get_item_link($item);
            $output .= '</li>';
        }
    }

    function end_el(&$output, $item, $depth = 0, $args = array()) {
        if ($depth > 0) {
            $output .= '</li>';
        }
    }

    private function get_item_attributes($item) {
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($item->classes), $item));
        return $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
    }

    private function get_item_link($item) {
        $atts = array(
            'title'  => !empty($item->attr_title) ? $item->attr_title : '',
            'target' => !empty($item->target) ? $item->target : '',
            'rel'    => !empty($item->xfn) ? $item->xfn : '',
            'href'   => !empty($item->url) ? $item->url : ''
        );

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
            }
        }

        return '<a' . $attributes . '>' . apply_filters('the_title', $item->title, $item->ID) . '</a>';
    }

    public function display_custom_nav() {
        $output = '<ul class="main-menu">';
        foreach ($this->sorted_menu_items as $item) {
            if ($item->menu_item_parent == 0) {
                $data_trigger = get_field('data-trigger', $item);
                $output .= '<li' . $this->get_item_attributes($item) . ($data_trigger ? ' data-trigger="' . esc_attr($data_trigger) . '"' : '') . '>';
                $output .= '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
                $output .= '</li>';
            } else {
                $this->sub_menu_items[$item->menu_item_parent][] = $item;
            }
        }
        $output .= '</ul>';
        
        $build_folder = get_template_directory_uri() . '/assets/';
        
        $output .= '<div class="custom-menu__nav-inner">';
        foreach ($this->sub_menu_items as $parent_id => $sub_items) {
            $parent_item = $this->sorted_menu_items[array_search($parent_id, array_column($this->sorted_menu_items, 'ID'))];
            $parent_data_trigger = get_field('data-trigger', get_post($parent_id));
            $parent_url = $parent_item->url;
            $output .= '<div data-menu="' . esc_attr($parent_data_trigger) . '" class="current-submenu">';
            $output .= '<div class="current-submenu__nav">';
            $output .= '<button class="back-btn">';
            $output .= '<svg width="13" height="11">';
            $output .= '<use href="' . $build_folder . 'img/sprite/sprite.svg#arrow-l"></use>';
            $output .= '</svg>';
            $output .= '</button>';
            $output .= '<a href="' . esc_url($parent_url) . '" class="current-submenu__title">';
            $output .= esc_html($parent_item->title);
            $output .= '<svg width="13" height="11">';
            $output .= '<use href="' . $build_folder . 'img/sprite/sprite.svg#arrow-r"></use>';
            $output .= '</svg>';
            $output .= '</a>';
            $output .= '</div>';
            $output .= '<ul>';
            
            foreach ($sub_items as $sub_item) {
                $data_descr = get_field('data-descr', $sub_item); 
                $output .= '<li' . $this->get_item_attributes($sub_item) . '>';
                $output .= '<a href="' . esc_url($sub_item->url) . '"';
                if ($data_descr) {
                    $output .= ' data-descr="' . esc_attr($data_descr) . '"';
                }
                $output .= '>' . esc_html($sub_item->title) . '</a>';
                $output .= '</li>';
            }
            $output .= '</ul></div>';
        }
        $output .= '</div>'; 
        
        return $output;
    }
}


function print_custom_menu() {
    $walker = new Custom_Walker_Nav_Menu();
    $menu = wp_get_nav_menu_object(get_nav_menu_locations()['custom-menu']);
    $walker->sorted_menu_items = wp_get_nav_menu_items($menu->term_id);
    echo $walker->display_custom_nav();
}

// Custom Menu End