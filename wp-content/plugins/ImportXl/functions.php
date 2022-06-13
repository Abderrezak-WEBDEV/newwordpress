<?php

/*
* On utilise une fonction pour créer notre custom post type 'Séries TV'
*/

function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		'name'                => _x('Mentormarketing_products', 'Post Type General Name', 'twentytwentyone'),
		'singular_name'       => _x('Mentormarketing', 'Post Type Singular Name', 'twentytwentyone'),
		'menu_name'           => __('Mentormarketing_product', 'twentytwentyone'),
		'name_admin_bar'      => __('Mentormarketing_Product', 'twentytwentyone'),
		'parent_item_colon'   => __('Parent Item:', 'twentytwentyone'),
		'all_items'           => __('All Products', 'twentytwentyone'),
		'add_new_item'        => __('Add New Product', 'twentytwentyone'),
		'add_new'             => __('Add New product', 'twentytwentyone'),
		'new_item'            => __('New Item', 'twentytwentyone' ),
		'edit_item'           => __('Edit Item', 'twentytwentyone'),
		'update_item'         => __('Update Item', 'twentytwentyone'),
		'view_item'           => __('View Item', 'twentytwentyone'),
		'search_items'        => __('Search Item', 'twentytwentyone'),
		'not_found'           => __('Not found', 'twentytwentyone'),
		'not_found_in_trash'  => __('Not found in Trash', 'twentytwentyone'),
	);
	$rewrite = array(
		'slug'                => _x('Mentormarketing', 'Mentormarketing', 'twentytwentyone'),
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => false,
	);
	$args = array(
		'label'               => __('Mentormarketing', 'twentytwentyone'),
		'description'         => __('Mentormarketing', 'twentytwentyone'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
		'taxonomies'          => array('Mentormarketing_type'),
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
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type('property', $args);	
}
add_action( 'init', 'wpm_custom_post_type', 10 );
/**
 * afficher le CPT dans la page d'acceuil
 */
function wpc_cpt_in_home($query) {
	if (! is_admin() && $query->is_main_query()) {
	  if ($query->is_home) {
		$query->set('post_type', array('post', 'property'));
	  }
	}
  }
  
  add_action('pre_get_posts','wpc_cpt_in_home');
?>