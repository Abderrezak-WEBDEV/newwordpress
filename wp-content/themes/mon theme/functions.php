<?php
function montheme_theme_support(){
add_theme_support('title-tag'); // Titre du site
add_theme_support('custom-logo'); // Logo Custom
add_theme_support('custom-background'); // Fond d'écran
add_theme_support('editor-color-palette'); // Palette Header + background
add_theme_support('post-thumbnails'); // Miniatures

}
add_action('after_setup_theme', 'montheme_theme_support');


function montheme_menus(){
$location = array(
'primary' => "Desktop primary left sidebar",
'footer' => "footer Menu Items"

);
register_nav_menus( $location );
}
add_action('init',
'montheme_menus');

function montheme_register_styles(){
    wp_enqueue_style('montheme-fontawesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/fontawesome.min.css" , '4.2', 'all');
    }

    function montheme_widget_area(){
        register_sidebar(
        array(
        'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
        'after_widget' => '</ul>',
        'name' => 'Sidebar 1',
        'id' => 'sidebar-1',
        'description' => 'Add widgets here to appear in your region.',
        )
        );
        register_sidebar(
        array(
        'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
        'after_widget' => '</ul>',
        'name' => 'Footer Area',
        'id' => 'footerbar-1',
        'description' => 'Add widgets here to appear in your region.',
        )
        );
        }
        add_action('widgets_init', 'montheme_widget_area');


?>

