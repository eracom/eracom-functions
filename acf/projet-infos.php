<?php 

/* Define ACF Fields
 ********************
*/

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
		), // Galerie
		array (
			'key' => 'field_59f757cdd866a',
			'label' => 'Vidéos',
			'name' => 'eracom_videos',
			'type' => 'repeater',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Ajouter une vidéo',
			'sub_fields' => array (
				array (
					'key' => 'field_59f757cde4ad3',
					'label' => 'Vidéo',
					'name' => 'eracom_video_item',
					'type' => 'oembed',
					'value' => NULL,
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'width' => '',
					'height' => '',
				),
			), // sub_fields
		), // eracom_videos
	), // fields
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'eracom_projet',
			),
		),
	), // location
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

