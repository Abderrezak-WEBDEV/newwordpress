
<?php 
include 'functions.php';

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

/**
 * creation de plugin sur le Dashbord du wordpress
 */
class MyAwesomeClass 
{
    public function __construct()
    {
     add_action( 'admin_menu', [ $this, 'admin_awesome_plugin_menu'] );
    }
    public function admin_awesome_plugin_menu()
    {
        add_menu_page(
	    __('My Import Plugin', 'my-awesome-plugin'), // Page title
	    __('My Import Plugin', 'my-awesome-plugin'), // Menu title
	    'manage_options',  // Capability
	    'my-awesome-plugin', // Slug
	    [ &$this, 'load_awesome_plugin_page'], // Callback page function
	);
    }
    public function load_awesome_plugin_page() 
    { 
        echo '<h1>' . __( 'My Import Plugin', 'my-awesome-plugin' ) . '</h1>'; 
        echo '<p>' . __( 'Welcome to My Import Plugin', 'my-awesome-plugin' ) . '</p>'; 
        echo '
        <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload" name="submittheform">
        </form>
        ';
        
        /**
         * conditions liée au type de fichier 
         */
      if(!empty($_FILES)) {

        global $wp_filesystem;
            WP_Filesystem();
            $name_file = $_FILES['fileToUpload']['name'];
            $content_directory = $wp_filesystem->wp_content_dir() . 'uploads/';
            // $wp_filesystem->mkdir( $content_directory . 'CustomDirectory' );
            $target_dir_location = $content_directory . 'CustomDirectory/';
            $extention_autorisees = array (".xlsx", ".XLSX");
            $file_extention = strrchr($name_file,'.');
          
            if( in_array( $file_extention, $extention_autorisees ) ) {
                //  if(move_uploaded_file($file_tmp_name,$file_dest)) {
                echo "Fichier téléchargé avec succès";
                } else {
                echo "Une erreur est survenue lors de l'envoi du fichier";
                }
                } else {
                    echo "Seul les fichiers xlsx sont autorisés";
                }           
             if(isset($_POST["submittheform"]) && isset($_FILES['fileToUpload'])) {
            
                 $name_file = $_FILES['fileToUpload']['name'];
                 $tmp_name = $_FILES['fileToUpload']['tmp_name'];
            
                if( move_uploaded_file( $tmp_name, $target_dir_location.$name_file ) ) {
                   
                } else {
                    echo "The file was not uploaded";
                }    
            }
        }
        
    }
new MyAwesomeClass();

