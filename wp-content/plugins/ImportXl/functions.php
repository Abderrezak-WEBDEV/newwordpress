<?php

/*
* On utilise une fonction pour créer notre custom post type
*/

function register_my_cpts()
{
    /**
     * label du CPT: mentormarketing_prod.
     */
    $labels = [
        "name" => __("mentormarketing_products", "twentytwenty"),
        "singular_name" => __("mentormarketing_products", "twentytwenty"),
        "menu_name" => __("My Mentormarketing_products", "twentytwenty"),
        "all_items" => __("All Products", "twentytwenty"),
        "add_new" => __("Ajouter un nouveau", "twentytwenty"),
        "add_new_item" => __("Add new Products ", "twentytwenty"),
        "edit_item" => __("Modifier", "twentytwenty"),
        "new_item" => __("Nouveau ", "twentytwenty"),
        "view_item" => __("Voir ", "twentytwenty"),
        "view_items" => __("Voir ", "twentytwenty"),
        "search_items" => __("Recherche ", "twentytwenty"),
        "not_found" => __("Aucun mentormarketing_product trouvé", "twentytwenty"),
        "not_found_in_trash" => __("Aucun mentormarketing_products trouvé dans la corbeille", "twentytwenty"),
        "parent" => __("mentormarketing_products parent :", "twentytwenty"),
        "set_featured_image" => __("defined image", "twentytwenty"),
        "remove_featured_image" => __("remove img", "twentytwenty"),
        "use_featured_image" => __("Use img", "twentytwenty"),
        "archives" => __("Archives ", "twentytwenty"),
        "insert_into_item" => __("Insert to", "twentytwenty"),
        "uploaded_to_this_item" => __("Uploads ", "twentytwenty"),
        "filter_items_list" => __("Filter products", "twentytwenty"),
       
    ];
	$rewrite = array(
		'slug'                => _x('Mentormarketing_products', 'Mentormarketing_products', 'twentytwenty'),
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => false,
			);
	
    $args = [
        "label" => __("Mentormarketing_products", "twentytwenty"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => $rewrite,
        "query_var" => true,
        "supports" => ["title", "editor", "thumbnail"],
        "taxonomies" => ["category", "post_tag"],
        "show_in_graphql" => false,
    ];

    register_post_type("mentormarketing_prod", $args);
}

add_action('init', 'register_my_cpts');

function register_my_taxes()
{
    
    /**
     * Taxonomy: Brands.
     */

    $labels = [
        "name" => __("Brands", "twentytwenty"),
        "singular_name" => __("Brand", "twentytwenty"),
        "menu_name" => __("Brands", "twentytwenty"),
        "all_items" => __("All Brands", "twentytwenty"),
        "edit_item" => __("Modifier Brand", "twentytwenty"),
        "view_item" => __("Voir Brand", "twentytwenty"),
        "update_item" => __("Mettre à jour le nom de Brand", "twentytwenty"),
        "add_new_item" => __("Ajouter un nouveau Brand", "twentytwenty"),
        "new_item_name" => __("Nom du nouveau Brand", "twentytwenty"),
        "parent_item" => __("Parent dBrand", "twentytwenty"),
        "parent_item_colon" => __("Brand parent :", "twentytwenty"),
        "search_items" => __("Recherche de Brands", "twentytwenty"),
        "popular_items" => __("Brands populaires", "twentytwenty"),
        "separate_items_with_commas" => __("Séparer les Brands avec des virgules", "twentytwenty"),
        "add_or_remove_items" => __("Ajouter ou supprimer des Brands", "twentytwenty"),
        "choose_from_most_used" => __("Choisir parmi les Brands les plus utilisés", "twentytwenty"),
        "not_found" => __("Aucun Brands trouvé", "twentytwenty"),
        "no_terms" => __("Aucun Brands", "twentytwenty"),
        "items_list_navigation" => __("Navigation de liste de Brands", "twentytwenty"),
        "items_list" => __("Liste de Brands", "twentytwenty"),
        "back_to_items" => __("Retourner à Brands", "twentytwenty"),
        "name_field_description" => __("Le nom tel qu’il apparaîtra sur votre site.", "twentytwenty"),
        "parent_field_description" => __("Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "twentytwenty"),
        "slug_field_description" => __("The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "twentytwenty"),
         
       'show_in_rest' => true,
        "desc_field_description" => __("The description is not prominent by default; however, some themes may show it.", "twentytwenty"),
    ];

    $args = [
        "label" => __("Brands", "mentormarketing_products"),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => false,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => ['slug' => 'brand', 'with_front' => true,],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "rest_base" => "brand",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "rest_namespace" => "wp/v2",
        "show_in_quick_edit" => false,
        "sort" => false,
        "show_in_graphql" => false,
    ];
    register_taxonomy("brand", ["mentormarketing_prod"], $args);

    /**
     * Taxonomy: Statuts.
     */

    $labels = [
        "name" => __("Statuts", "twentytwenty"),
        "singular_name" => __("statut", "twentytwenty"),
        "menu_name" => __("Statuts", "twentytwenty"),
        "all_items" => __("Tous les Statuts", "twentytwenty"),
        "edit_item" => __("Modifier statut", "twentytwenty"),
        "view_item" => __("Voir statut", "twentytwenty"),
        "update_item" => __("Mettre à jour le nom de statut", "twentytwenty"),
        "add_new_item" => __("Ajouter un nouveau statut", "twentytwenty"),
        "new_item_name" => __("Nom du nouveau statut", "twentytwenty"),
        "parent_item" => __("Parent dstatut", "twentytwenty"),
        "parent_item_colon" => __("statut parent :", "twentytwenty"),
        "search_items" => __("Recherche de Statuts", "twentytwenty"),
        "popular_items" => __("Statuts populaires", "twentytwenty"),
        "separate_items_with_commas" => __("Séparer les Statuts avec des virgules", "twentytwenty"),
        "add_or_remove_items" => __("Ajouter ou supprimer des Statuts", "twentytwenty"),
        "choose_from_most_used" => __("Choisir parmi les Statuts les plus utilisés", "twentytwenty"),
        "not_found" => __("Aucun Statuts trouvé", "twentytwenty"),
        "no_terms" => __("Aucun Statuts", "twentytwenty"),
        "items_list_navigation" => __("Navigation de liste de Statuts", "twentytwenty"),
        "items_list" => __("Liste de Statuts", "twentytwenty"),
        "back_to_items" => __("Retourner à Statuts", "twentytwenty"),
        "name_field_description" => __("Le nom tel qu’il apparaîtra sur votre site.", "twentytwenty"),
        "parent_field_description" => __("Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "twentytwenty"),
        "slug_field_description" => __("The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "twentytwenty"),
        "desc_field_description" => __("The description is not prominent by default; however, some themes may show it.", "twentytwenty"),
    ];


    $args = [
        "label" => __("Statuts", "mentormarketing_products"),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => false,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => ['slug' => 'statuts', 'with_front' => true,],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "rest_base" => "statuts",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "rest_namespace" => "wp/v2",
        "show_in_quick_edit" => false,
        "sort" => false,
       
    ];
    register_taxonomy("statuts", ["mentormarketing_prod"], $args);

    /**
     * Taxonomy: Names.
     */

    $labels = [
        "name" => __("Names", "twentytwenty"),
        "singular_name" => __("name", "twentytwenty"),
        "menu_name" => __("Names", "twentytwenty"),
        "all_items" => __("Tous les Names", "twentytwenty"),
        "edit_item" => __("Modifier name", "twentytwenty"),
        "view_item" => __("Voir name", "twentytwenty"),
        "update_item" => __("Mettre à jour le nom de name", "twentytwenty"),
        "add_new_item" => __("Ajouter un nouveau name", "twentytwenty"),
        "new_item_name" => __("Nom du nouveau name", "twentytwenty"),
        "parent_item" => __("Parent dname", "twentytwenty"),
        "parent_item_colon" => __("name parent :", "twentytwenty"),
        "search_items" => __("Recherche de Names", "twentytwenty"),
        "popular_items" => __("Names populaires", "twentytwenty"),
        "separate_items_with_commas" => __("Séparer les Names avec des virgules", "twentytwenty"),
        "add_or_remove_items" => __("Ajouter ou supp","twentytwenty"),
        "choose_from_most_used" => __("Choisir parmi les Names les plus utilisés","twentytwenty"),
        "not_found" => __("Aucun Names trouvé", "twentytwenty"),
        "no_terms" => __("Aucun Names", "twentytwenty"),
        "items_list_navigation" => __("Navigation de","twentytwenty"),
        "items_list" => __("Liste de Names", "twentytwenty"),
        "back_to_items" => __("Retourner à Names", "twentytwenty"),
        "name_field_description" => __("Le nom tel qu’il apparaîtra sur votre site.", "twentytwenty"),
        "parent_field_description" => __("Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "twentytwenty"),
        "slug_field_description" => __("The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "twentytwenty"),
        "desc_field_description" => __("The description is not prominent by default; however, some themes may show it.", "twentytwenty"),
    ];

    $args = [
        "label" => __("Names", "mentormarketing_products"),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => false,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => ['slug' => 'names', 'with_front' => true,],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "rest_base" => "names",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "rest_namespace" => "wp/v2",
        "show_in_quick_edit" => false,
        "sort" => false,
        "show_in_graphql" => false,
    ];
    register_taxonomy("names", ["mentormarketing_prod"], $args);

    
}
add_action('init', 'register_my_taxes');

