<?php
// Cacher la barre admin
show_admin_bar(false);

// Ajouter les images à la une sur les articles
add_theme_support( 'post-thumbnails' );

// Ajouter un menu
register_nav_menu('principal', 'Menu principal');

add_action( 'nav_menu_css_class', 'menu_item_classes', 10, 3 );
function menu_item_classes( $classes, $item, $args ) {
    // Gardons seulement les classes qui nous intéressent
    $classes = array_intersect( $classes, array(
        'menu-item',
        'current-menu-item',
        'current-menu-parent',
        'menu-item-has-children'
    ) );
    // Ajoutons la classe pour désigner les éléments vides
    if ( '#' == $item->url ) {
        $classes[] = 'empty-item';
    }

    return $classes;
}
/**
 * Changer les liens vides en span
 */
add_action( 'walker_nav_menu_start_el', 'empty_nav_links_to_span', 10, 4 );
function empty_nav_links_to_span( $item_output, $item, $depth, $args ) {
    $menu_items = array(48,51);
    if (in_array($item->ID, $menu_items)) {
        $item_output = preg_replace( '/<a.*?>(.*)<\/a>/', '<span class="notactive">$1 <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></span>', $item_output );
    }
    return $item_output;
}
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
    register_post_type('atelier',
        array(
            'labels' => array(
                'name' => 'Atelier',
                'singular_name' => 'Atelier'
            ),
            'query_var' => true,
            'has_archive' => true,
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title'),
            'rewrite' => array(
                'slug' => 'videography',
                'with_front'=>false //if not used then permalink of this post type will not work
            ),
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
    'categories',
    'peintures',
    array(
        'label' => 'Catégories',
        'labels' => array(
            'name' => 'Catégories',
            'singular_name' => 'Categorie',
            'all_items' => 'Toutes les catégories',
            'edit_item' => 'Éditer la catégories',
            'view_item' => 'Voir la catégories',
            'update_item' => 'Mettre à jour la catégories',
            'add_new_item' => 'Ajouter une catégories',
            'new_item_name' => 'Nouvelle catégories',
            'search_items' => 'Rechercher parmi les catégories',
            'popular_items' => 'Catégories les plus utilisées'
        ),
        'hierarchical' => true   ) );

register_taxonomy_for_object_type( 'categories', 'peintures' );


