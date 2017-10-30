<?php

/* 
custom css for admin
*/

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