<?php
/*
Plugin Name: Eracom Functions
Plugin URI: https://github.com/eracom/eracom-functions/
Description: This plugin adds functionality to the Eracom website.
Version: 1.0.1
Author: Eracom Web Team
Author URI: https://github.com/orgs/eracom/teams/site-eracom/members
GitHub Plugin URI: https://github.com/eracom/eracom-functions
*/




/* Relabel Posts to News
 *************************
*/

function eracom_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News';
    $submenu['edit.php'][5][0] = 'News';
    $submenu['edit.php'][10][0] = 'Ajouter';
    // $submenu['edit.php'][16][0] = 'Film Tags';
    echo '';
}
function eracom_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'News';
    $labels->singular_name = 'News';
    $labels->add_new = 'Ajouter';
    $labels->add_new_item = 'Ajouter';
    $labels->edit_item = 'Modifier';
    $labels->new_item = 'News';
    $labels->view_item = 'Afficher';
    $labels->search_items = 'Rechercher dans les News';
    $labels->not_found = 'Aucune News trouvée';
    $labels->not_found_in_trash = 'Aucune News trouvée dans la corbeille';
    $labels->all_items = 'Toutes les News';
    $labels->menu_name = 'News';
    $labels->name_admin_bar = 'News';
}
 
add_action( 'admin_menu', 'eracom_change_post_label' );
add_action( 'init', 'eracom_change_post_object' );


// Post Types
include_once (plugin_dir_path(__FILE__).'eracom-post-types.php');

// ACF Fields
include_once (plugin_dir_path(__FILE__).'eracom-acf.php');

// Admin Styles
include_once (plugin_dir_path(__FILE__).'eracom-admin-style.php');



/* Allowed FileTypes
 ********************
 * method based on 
 * http://howto.blbosti.com/?p=329
 * List of defaults: https://core.trac.wordpress.org/browser/tags/3.8.1/src/wp-includes/functions.php#L1948
*/

add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {

		// add your extension to the array
		$existing_mimes['svg'] = 'image/svg+xml';

		// removing existing file types
		unset( $existing_mimes['bmp'] );
		unset( $existing_mimes['tif|tiff'] );

		// and return the new full result
		return $existing_mimes;
}




/*
 * File Upload Security
 
 * Sources: 
 * http://www.geekpress.fr/wordpress/astuce/suppression-accents-media-1903/
 * https://gist.github.com/herewithme/7704370
 
 * See also Ticket #22363
 * https://core.trac.wordpress.org/ticket/22363
 * and #24661 - remove_accents is not removing combining accents
 * https://core.trac.wordpress.org/ticket/24661
*/ 

add_filter( 'sanitize_file_name', 'remove_accents', 10, 1 );
add_filter( 'sanitize_file_name_chars', 'sanitize_file_name_chars', 10, 1 );
 
function sanitize_file_name_chars( $special_chars = array() ) {
	$special_chars = array_merge( array( '’', '‘', '“', '”', '«', '»', '‹', '›', '—', 'æ', 'œ', '€','é','à','ç','ä','ö','ü','ï','û','ô','è' ), $special_chars );
	return $special_chars;
}


/*
 * gallery shortcode improvement
 * makes it link to the LARGE size, rather than FULL size
 
 * http://oikos.org.uk/2011/09/tech-notes-using-resized-images-in-wordpress-galleries-and-lightboxes/
*/

function eracom_get_attachment_link_filter( $content, $post_id, $size, $permalink ) {
 
    // Only do this if we're getting the file URL
    if (! $permalink) {
        // This returns an array of (url, width, height)
        $image = wp_get_attachment_image_src( $post_id, 'large' );
        $new_content = preg_replace('/href=\'(.*?)\'/', 'href=\'' . $image[0] . '\'', $content );
        return $new_content;
    } else {
        return $content;
    }
}
 
add_filter('wp_get_attachment_link', 'eracom_get_attachment_link_filter', 10, 4);



  
  
