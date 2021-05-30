<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION
function my_custom_post_real_estate() {
  $labels = array(
    'name'               => _x( 'Real Estate', 'post type general name' ),
    'singular_name'      => _x( 'Real Estate', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'real_estate' ),
    'add_new_item'       => __( 'Add New Real Estate' ),
    'edit_item'          => __( 'Edit Real Estate' ),
    'new_item'           => __( 'New Real Estate' ),
    'all_items'          => __( 'All Real Estate' ),
    'view_item'          => __( 'View Real Estate' ),
    'search_items'       => __( 'Search Real Estate' ),
    'not_found'          => __( 'No products found' ),
    'not_found_in_trash' => __( 'No products found in the Trash' ), 
    'menu_name'          => 'Real Estate'
  );
  $args = array(
    'labels'        => $labels,
     'hierarchical' => false,
    'rewrite'			=> array('slug'	=> '/estate/%real_estate%', 'with_front' => false),
    'description'   => 'Real Estates',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'real_estate', $args ); 
}
add_action( 'init', 'my_custom_post_real_estate' );



function my_taxonomies_location() {
  $labels = array(
    'name'              => _x( 'Location', 'taxonomy general name' ),
    'singular_name'     => _x( 'Location', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Location' ),
    'all_items'         => __( 'All Location' ),
    'parent_item'       => __( 'Parent Location' ),
    'edit_item'         => __( 'Edit Location' ), 
    'update_item'       => __( 'Update Location' ),
    'add_new_item'      => __( 'Add New Location' ),
    'new_item_name'     => __( 'New Location' ),
    'menu_name'         => __( 'Location' ),
  );
  $args = array(
    'labels' 			=> $labels,
    'hierarchical' => false,
    'rewrite'			=> array('slug'	=> '/location/%location%', 'with_front' => false ),
  );
  register_taxonomy( 'location', 'real_estate', $args );
}
add_action( 'init', 'my_taxonomies_location', 0 );



function my_taxonomies_type() {
  $labels = array(
    'name'              => _x( 'Type', 'taxonomy general name' ),
    'singular_name'     => _x( 'Type', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Type' ),
    'all_items'         => __( 'All Type' ),
    'parent_item'       => __( 'Parent Type' ),
    'edit_item'         => __( 'Edit Type' ), 
    'update_item'       => __( 'Update Type' ),
    'add_new_item'      => __( 'Add New Type' ),
    'new_item_name'     => __( 'New Type' ),
    'menu_name'         => __( 'Type' ),
  );
  $args = array(
    'labels' => $labels,
   'hierarchical' => false,
    'rewrite'			=> array('slug'	=> '/type/%type%', 'with_front' => false ),
  );
  register_taxonomy( 'type', 'real_estate', $args );
}
add_action( 'init', 'my_taxonomies_type', 0 );





if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_60ae24f591e7b',
	'title' => 'Field group',
	'fields' => array (),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'real_estate',
			),
		),
	),
));

acf_add_local_field(array(
	'key' => 'field_60ae251f369bf',
	'label' => 'Subtitle',
	'name' => 'subtitle',
	'type' => 'text',
	'parent' => 'group_60ae24f591e7b'
));
acf_add_local_field(array(
	'key' => 'field_60ae25df147c3',
	'label' => 'Image',
	'name' => 'image',
	'type' => 'image',
	'parent' => 'group_60ae24f591e7b'
));

endif;



function search_filter($query) {
    if ( ! is_admin() && $query->is_main_query() ) {
        if ( $query->is_search ) {
            $query->set( 'real_estate', 'post' );
        } 
        
    }
}
add_action( 'pre_get_posts', 'search_filter' );

