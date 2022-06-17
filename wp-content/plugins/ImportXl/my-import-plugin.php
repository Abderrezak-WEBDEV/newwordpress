 <?php 
  include 'functions.php';
  use PhpOffice\PhpSpreadsheet\IOFactory;
  use PhpOffice\PhpSpreadsheet\Spreadsheet;
 ?>

<?php  
/**
 * Plugin Name: AKEL PLUGIN IMPORT
 * Plugin URI: https://www.undefined.fr  
 * Description: Uplode a doc XLSN  directly in your websites  
 * Version: 0.1 
 * Author Name: ZACK AKEL 
 * Author: ZACK  
 * Domain Path: /languages  
 * Text Domain: linky 
 * Author URI: https://www.deve-web.fr/#about
 */
/**
 * si un utilisateur essaye d'ultiliser le code en dehors du wordpress.
 */
if ( ! defined( 'ABSPATH' ) )
exit;

/**activer ou désactiver mon plugin */
register_activation_hook(__FILE__, function () {
    // Je suis activé
 });

 register_deactivation_hook(__FILE__, function () {
    // Je suis désactivé
 });
 
 add_filter('acf/settings/load_json', 'my_acf_json_load_point');

 function my_acf_json_load_point( $paths ) {
     
     // remove original path (optional)
     unset($paths[0]);
     
     
     // append path
     $paths[] = get_stylesheet_directory() . '/my-custom-folder';
     
     
     // return
     return $paths;
     
 }
/**
 * creation de plugin sur le Dashbord du wordpress
 */
class MyImportClass 
{
    public function __construct()
    {
     add_action( 'admin_menu', [ $this, 'admin_awesome_plugin_menu'] );
    }
    public function admin_awesome_plugin_menu()
    {
        add_menu_page(
	    __('My Import Plugin', 'my-import-plugin'), // Page title
	    __('My Import Plugin', 'my-import-plugin'), // Menu title
	    'manage_options',  // Capability
	    'my-import-plugin', // Slug
	    [ &$this, 'load_awesome_plugin_page'], // Callback page function
	);
    }
    public function load_awesome_plugin_page() 
    { 
        echo '<h1>' . __( 'My Import Plugin', 'my-import-plugin' ) . '</h1>'; 
        echo '<p>' . __( 'Welcome to My Import Plugin', 'my-import-plugin' ) . '</p>'; 
        echo
         '
         <div id="class_form">
        <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload" name="submittheform">
        </form>
        </div>
        ';
        
        /**
         * conditions liée au type de fichier 
         */
      if(!empty($_FILES)) {

        global $wp_filesystem;
            WP_Filesystem();
            $name_file = $_FILES['fileToUpload']['name'];
            $content_directory = $wp_filesystem->wp_content_dir() .'uploads';
            $target_dir_location = $content_directory . '/';
          
                   
             if(isset($_POST["submittheform"]) && isset($_FILES['fileToUpload'])) {
            
                 $name_file = $_FILES['fileToUpload']['name'];
                 $tmp_name = $_FILES['fileToUpload']['tmp_name'];
             
                echo "fichier télécharguer avec succès";
                
                if ( move_uploaded_file( $tmp_name, $target_dir_location. $name_file ) ) {
                   
                } else {
                    echo "echec de téléchargement";
                } 
               
            }
        }
    }
}

new MyImportClass();