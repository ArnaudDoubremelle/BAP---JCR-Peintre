<?php
/* Ajout des scripts JavaScript */
// Cacher la barre admin
show_admin_bar(false);

// Ajouter les images à la une sur les articles
add_theme_support( 'post-thumbnails' );

// Ajouter un menu
register_nav_menu('principal', 'Menu principal');
// Ajouter un menu
register_nav_menu('langues', 'Switch Langues');

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
        $item_output = preg_replace( '/<a.*?>(.*)<\/a>/', '<span>$1 <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></span>', $item_output );
    }
    return $item_output;
}
add_action( 'walker_nav_menu_start_el', 'contact_va_link', 10, 4 );
function contact_va_link( $item_output, $item, $depth, $args ) {
    $menu_items = array(149);
    if (in_array($item->ID, $menu_items)) {
        $item_output = preg_replace( '/<a.*?>(.*)<\/a>/', '<a href="#inline" data-lity>$1</a>', $item_output );
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
            'taxonomies' => array( 'serie' ),
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
            'taxonomies' => array( 'categorie' ),
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );
    register_post_type('repérage',
        array(
            'labels' => array(
                'name' => 'Repérage',
                'singular_name' => 'Repérage'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title'),
        )
    );
}
/*Custom categorie*/
register_taxonomy(
    'series',
    'peintures',
    array(
        'label' => 'Series',
        'labels' => array(
            'name' => 'Series',
            'singular_name' => 'Serie',
            'all_items' => 'Toutes les series',
            'edit_item' => 'Éditer la series',
            'view_item' => 'Voir la series',
            'update_item' => 'Mettre à jour la series',
            'add_new_item' => 'Ajouter une serie',
            'new_item_name' => 'Nouvelle series',
            'search_items' => 'Rechercher parmi les series',
            'popular_items' => 'Series les plus utilisées'
        ),
        'hierarchical' => false   ) );

register_taxonomy_for_object_type( 'series', 'peintures' );

function ct_categorie() {
    $labels = array(
        'label' => 'Categories',
        'labels' => array(
            'name' => 'Categories',
            'singular_name' => 'Categorie',
            'all_items' => 'Toutes les categories',
            'edit_item' => 'Éditer la categories',
            'view_item' => 'Voir la categories',
            'update_item' => 'Mettre à jour la categories',
            'add_new_item' => 'Ajouter une categories',
            'new_item_name' => 'Nouvelle categories',
            'search_items' => 'Rechercher parmi les categories',
            'popular_items' => 'Categories les plus utilisées')
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'query_var' => 'categorie',
    );
    register_taxonomy( 'categorie', 'carnets', $args );
}
add_action( 'init', 'ct_categorie', 0 );






