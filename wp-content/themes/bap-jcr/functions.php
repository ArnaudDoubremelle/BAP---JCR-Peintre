<?php
// Ajouter un menu
register_nav_menu('principal', 'Menu principal');

// Créer des Custom Post Type
// add_action( 'init', 'create_post_type' );
// function create_post_type() {
//     // Dupliquer le register_post_type pour ajouter d'autres CPT
//     register_post_type('service',
//         array(
//             'labels' => array(
//                 'name' => 'Service',
//                 'singular_name' => 'Service'
//             ),
//             'public' => true,
//             'supports' => array('thumbnail', 'editor', 'title')
//         )
//     );
// }
