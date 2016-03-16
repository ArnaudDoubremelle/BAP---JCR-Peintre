<?php
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
    register_post_type('galerie',
        array(
            'labels' => array(
                'name' => 'Galerie',
                'singular_name' => 'Galerie'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );
}
//Le jquery
wp_enqueue_script("jquery");
/*Script JS pour la vidéo d'accueil*/
function theme_js(){

    wp_register_script( 'video',
        get_template_directory_uri() . '/js/video.js',
        array() );
    if (is_home()) {
        wp_enqueue_script('video');
    }
}
add_action( 'wp_footer', 'theme_js' );

/*Script JS pour le menu JS*/
function menu_js(){

    wp_register_script( 'menu',
        get_template_directory_uri() . '/js/menu.js',
        array() );
    if (!is_home()) {
        wp_enqueue_script('menu');
    }

}
add_action( 'wp_footer', 'menu_js' );

/*Custom categorie*/
register_taxonomy(
    'categorie',
    'galerie',
    array(
        'label' => 'Categories',
        'labels' => array(
            'name' => 'Categories',
            'singular_name' => 'Categorie',
            'all_items' => 'Toutes les categories',
            'edit_item' => 'Éditer la categorie',
            'view_item' => 'Voir la categorie',
            'update_item' => 'Mettre à jour la categorie',
            'add_new_item' => 'Ajouter une categorie',
            'new_item_name' => 'Nouvelle categorie',
            'search_items' => 'Rechercher parmi les categories',
            'popular_items' => 'Categories les plus utilisées'
        ),
        'hierarchical' => false   ) );

register_taxonomy_for_object_type( 'categorie', 'galerie' );