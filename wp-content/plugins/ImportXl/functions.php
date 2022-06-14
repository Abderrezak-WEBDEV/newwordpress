<?php

/*
* On utilise une fonction pour créer notre custom post type 'Séries TV'
*/

function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		'name'                => _x('Mentormarketing_products', 'Post Type General Name', 'twentytwenty'),
		'singular_name'       => _x('Mentormarketing', 'Post Type Singular Name', 'twentytwenty'),
		'menu_name'           => __('Mentormarketing_product', 'twentytwenty'),
		'name_admin_bar'      => __('Mentormarketing_Product', 'twentytwenty'),
		'parent_item_colon'   => __('Parent Item:', 'twentytwenty'),
		'all_items'           => __('All Products', 'twentytwenty'),
		'add_new_item'        => __('Add New Product', 'twentytwenty'),
		'add_new'             => __('Add New product', 'twentytwenty'),
		'new_item'            => __('New Item', 'twentytwenty' ),
		'edit_item'           => __('Edit Item', 'twentytwenty'),
		'update_item'         => __('Update Item', 'twentytwenty'),
		'view_item'           => __('View Item', 'twentytwenty'),
		'search_items'        => __('Search Item', 'twentytwenty'),
		'not_found'           => __('Not found', 'twentytwenty'),
		'not_found_in_trash'  => __('Not found in Trash', 'twentytwenty'),
	);
	$rewrite = array(
		'slug'                => _x('Mentormarketing', 'Mentormarketing', 'twentytwenty'),
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => false,
	);
	$args = array(
		'label'               => __('Mentormarketing', 'twentytwenty'),
		'description'         => __('Mentormarketing', 'twentytwenty'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
		'rest_controller_class" => "WP_REST_Posts_Controller',
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-admin-home',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'query_var'           => 'Mentormarketing',
		'rewrite'             =>  $rewrite,
		'capability_type'     => 'page',
		'supports' => ['title', 'editor', 'thumbnail'],
        'taxonomies' => ['category', 'post_tag'],
        'show_in_graphql' => false,
	);
	register_post_type('Mentormarketing', $args);	
}
add_action( 'init', 'wpm_custom_post_type', 10 );
/**
 * afficher le CPT dans la page d'acceuil
 */
function wpc_cpt_in_home($query) {
	if (! is_admin() && $query->is_main_query()) {
	  if ($query->is_home) {
		$query->set('post_type', array('post', 'Mentormarketing'));
	  }
	}
  }
  
  add_action('pre_get_posts','wpc_cpt_in_home');
?>