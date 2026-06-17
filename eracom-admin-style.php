<?php

/* 
custom css for admin
*/

add_action('enqueue_block_editor_assets', function() {
    wp_add_inline_style('wp-edit-blocks', '
        :root {
            font-size: 16px !important;
        }
        .editor-styles-wrapper h1 { font-size: 2em !important; }
        .editor-styles-wrapper h2 { font-size: 1.5em !important; }
        .editor-styles-wrapper h3 { font-size: 1.17em !important; }
        .editor-styles-wrapper h4 { font-size: 1em !important; }
        .editor-styles-wrapper h5 { font-size: 0.83em !important; }
        .editor-styles-wrapper h6 { font-size: 0.67em !important; }
    ');
});


 function eracom_admin_css() {
    echo '<style type="text/css">
    
            /*
            On masque les champs de la galerie ACF qui ne sont pas utilisés sur le site.
            */
            
            .acf-gallery-side-data [data-name=description],
            .acf-gallery-side-data [data-name=title]
            {
            	display: none;
            }
            
            .acf-gallery .acf-gallery-side-data textarea {
            	height: 120px;
            }
            
            .
            
          </style>';
 }
 
 add_action('admin_head', 'eracom_admin_css');