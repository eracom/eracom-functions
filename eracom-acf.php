<?php 



/* Define ACF Fields
 ********************
*/

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5991b019ab07d',
	'title' => 'Informations du projet',
	'fields' => array (
		array (
			'key' => 'field_5991b06b9195a',
			'label' => 'Sous-Titre',
			'name' => 'eracom_soustitre',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5991b2e347f62',
			'label' => 'Infos',
			'name' => 'eracom_infos',
			'type' => 'text',
			'instructions' => 'P.ex. "Workshop GR399, Avril 2017"',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5991b2ad52c7e',
			'label' => 'Descriptif',
			'name' => 'eracom_descriptif',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'basic',
			'media_upload' => 0,
			'delay' => 0,
		),
		array (
			'key' => 'field_5991b0b9f93c8',
			'label' => 'Galerie',
			'name' => 'eracom_galerie',
			'type' => 'gallery',
			'instructions' => 'La première image sera affichée en grand',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'preview_size' => 'thumbnail',
			'insert' => 'append',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'eracom_projet',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

/* Informations sur la formation
 *********************************
 * Affiche deux options:
 * Catégorie (pour projets)
 * Organigramme (nom d'organigramme)
*/

acf_add_local_field_group(array (
	'key' => 'group_5995ad916f0a5',
	'title' => 'Informations sur la formation',
	'fields' => array (
		array (
			'key' => 'field_5995ad9b1b839',
			'label' => 'Catégorie',
			'name' => 'eracom_formation',
			'type' => 'taxonomy',
			'instructions' => 'Choisir la catégorie dont les projets seront affichés.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'eracom_type_de_projet',
			'field_type' => 'select',
			'allow_null' => 0,
			'add_term' => 1,
			'save_terms' => 0,
			'load_terms' => 0,
			'return_format' => 'object',
			'multiple' => 0,
		),
		array (
			'key' => 'field_5995e43bc7496',
			'label' => 'Organigramme',
			'name' => 'eracom_organigramme',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array ( // cf. https://github.com/eracom/eracom-wordpress-2017/issues/2
				'Aucun organigramme' => 'Aucun organigramme',
				'Duale 4 ans' => 'Duale 4 ans',
				'Duale 3/4 ans' => 'Duale 3/4 ans',
				'Plein temps 3 + duale 3' => 'Plein temps 3 + duale 3',
				'Plein temps 3/4 + duale 4' => 'Plein temps 3/4 + duale 4'
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'Aucun',
			'layout' => 'vertical',
			'return_format' => 'value',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'eracom_formation',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

/* Description de la formation
 *********************************
*/

acf_add_local_field_group(array (
	'key' => 'group_59931ead974f7',
	'title' => 'Description de la formation',
	'fields' => array (
		array (
			'key' => 'field_59946b003db64',
			'label' => 'Colonne',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_59931f951b2dc',
			'label' => 'Contenu Colonne 1',
			'name' => 'eracom_col_1',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'basic',
			'media_upload' => 0,
			'delay' => 0,
		),
		array (
			'key' => 'field_59946b676af67',
			'label' => 'Colonne 2',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_59931fbe6b878',
			'label' => 'Contenu Colonne 2',
			'name' => 'eracom_col_2',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'basic',
			'media_upload' => 0,
			'delay' => 0,
		),
		array (
			'key' => 'field_59946b716af68',
			'label' => 'Colonne 3',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_59931fd2b1ada',
			'label' => 'Contenu Colonne 3',
			'name' => 'eracom_col_3',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'basic',
			'media_upload' => 0,
			'delay' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'eracom_formation',
			),
		),
	),
	'menu_order' => 5,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;