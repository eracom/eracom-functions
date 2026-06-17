<?php 



/* Register Post Types
 ********************
*/

add_action( 'init', 'eracom_register_post_types' );

function eracom_register_post_types() {

		register_post_type(
				'eracom_projet', array(	
					'label' =>'Projets',
					'description' => 'Projets ERACOM',
					'public' => true,
					'show_ui' => true,
					'show_in_menu' => true,
					 'menu_icon' => 'dashicons-format-image', // src: http://melchoyce.github.io/dashicons/
					// dashicons-admin-post
					'capability_type' => 'post',
					'hierarchical' => false,
					'has_archive'		 => true,
					'rewrite' => array('slug' => 'projets'),
					'query_var' => true,
					'exclude_from_search' => false,
					'menu_position' => 6,
					'supports' => array(
						'title',
						// 'editor',
						// 'revisions',
						// 'thumbnail',
						'author',
						'publicize',
						),
					'taxonomies' => array( 'eracom_type_de_projet' ),
					'labels' => array (
				  	  'name' => 'Projets',
				  	  'singular_name' => 'Projet',
				  	  'menu_name' => 'Projets',
				  	  'add_new' => 'Ajouter',
				  	  'add_new_item' => 'Ajouter',
				  	  'edit' => 'Modifier',
				  	  'edit_item' => 'Modifier',
				  	  'new_item' => 'Nouveau Projet',
				  	  'view' => 'Afficher',
				  	  'view_item' => 'Afficher',
				  	  'search_items' => 'Rechercher',
				  	  'not_found' => 'Aucun résultat',
				  	  'not_found_in_trash' => 'Aucun résultat',
				  	  'parent' => 'Élément Parent',
				),
			) 
		);
		
		register_taxonomy( 
					'eracom_type_de_projet',
					array( 'eracom_projet' ),
					array( 
				 		'hierarchical' => true,
				 		'show_ui' => true,
				 		'show_admin_column' => true,
				 		'label' => 'Branches',
				 		'rewrite' => array('slug' => 'branche'),
				 		'singular_label' => 'Branche'
			 		) 
			 );
		

} // end eracom_register_post_types
