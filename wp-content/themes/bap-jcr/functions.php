<?php
// Cacher la barre admin
show_admin_bar(false);

//Ajout Side Menu
register_nav_menu('side', 'Menu side');

// Ajouter les images à la une sur les articles
add_theme_support( 'post-thumbnails' );

// Ajouter un menu
register_nav_menu('principal', 'Menu principal');

// Créer des Custom Post Type
add_action( 'init', 'create_post_type' );
function create_post_type() {
    // Dupliquer le register_post_type pour ajouter d'autres CPT
    register_post_type('peintures',
        array(
            'labels' => array(
                'name' => 'Peintures',
                'singular_name' => 'Peintures'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );
    register_post_type('carnets',
        array(
            'labels' => array(
                'name' => 'Carnets',
                'singular_name' => 'Carnets'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );
}
//Le jquery
/*wp_enqueue_script("jquery");
/*Script JS pour la vidéo d'accueil*/
/*function video_js(){

    wp_register_script( 'video',
        get_template_directory_uri() . '/js/aaaaa.js',
        array() );
    if (is_home()) {
        wp_enqueue_script('video');
    }
}
add_action( 'wp_footer', 'video_js' );

/*Custom categorie*/
register_taxonomy(
    'série',
    'peintures',
    array(
        'label' => 'Séries',
        'labels' => array(
            'name' => 'Séries',
            'singular_name' => 'Categorie',
            'all_items' => 'Toutes les séries',
            'edit_item' => 'Éditer la série',
            'view_item' => 'Voir la série',
            'update_item' => 'Mettre à jour la série',
            'add_new_item' => 'Ajouter une série',
            'new_item_name' => 'Nouvelle série',
            'search_items' => 'Rechercher parmi les séries',
            'popular_items' => 'Séries les plus utilisées'
        ),
        'hierarchical' => true   ) );

register_taxonomy_for_object_type( 'série', 'peintures' );