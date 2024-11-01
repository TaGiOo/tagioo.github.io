<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

register_nav_menus( array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
) );

function add_column( $columns ){
    $columns['post_id_clmn'] = 'ID'; // $columns['Column ID'] = 'Column Title';
    return $columns;
}
add_filter('manage_posts_columns', 'add_column', 5);

function column_content( $column, $id ){
    if( $column === 'post_id_clmn')
        echo $id;
}
add_action('manage_posts_custom_column', 'column_content', 5, 2);