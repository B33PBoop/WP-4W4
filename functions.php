<?php 

function cidw_4w4_enqueue(){
    // wp_enqueue_style('style_css', get_stylesheet_uri());
    wp_enqueue_style('4w4-le-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);
}

add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

// Enregistrement du Menu Principal (voir Header)
function cidw_4w4_register_nav_menu(){
    register_nav_menus( array(
        'menu_principal' => __('Menu Principal', 'cidw_4w4'),
        'menu_footer' => __('Menu Footer', 'cidw_4w4'),
    ) );
}
add_action('after_setup_theme', 'cidw_4w4_register_nav_menu', 0);

//Filtrer les choix du menu principal
function cidw_4w4_filtre_choix_menu($obj_menu){
    foreach($obj_menu as $key => $value){
        // $value->title = substr($value->title, 0, 7);
        $value->title = wp_trim_words($value->title, 3);
    }
    return $obj_menu;
}
add_filter("wp_nav_menu_objects", "cidw_4w4_filtre_choix_menu");

/*Ajout de supports*/
function cidw_4w4_add_theme_support(){

    add_theme_support( 'post-thumbnails' );
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 100,
    ));

}
add_action('after_setup_theme', 'cidw_4w4_add_theme_support');

/* Enregistrement des Sidebars */
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'footer_colonne_1',
            'name'          => __( 'Footer colonne #1' ),
            'description'   => __( 'Sidebar s\'affichant dansune colonne du footer'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    
    register_sidebar(
        array(
            'id'            => 'footer_colonne_2',
            'name'          => __( 'Footer colonne #2' ),
            'description'   => __( 'Sidebar s\'affichant dansune colonne du footer'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer_colonne_3',
            'name'          => __( 'Footer colonne #3' ),
            'description'   => __( 'Sidebar s\'affichant dansune colonne du footer'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}

?>