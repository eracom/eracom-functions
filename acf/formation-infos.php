<?php 


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
				'dual2' => 'Dual 2 ans',
				'dual3' => 'Dual 3 ans',
				'dual3-4' => 'Dual 3/4 ans',
				'dual4' => 'Dual 4 ans',
				'pt3-dual3' => 'Plein temps 3 + dual 3 ans',
				'pt3-4-dual4' => 'Plein temps 3/4 + dual 4 ans'
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

