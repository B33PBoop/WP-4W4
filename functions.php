<?php 

require_once("options/apparence.php");

function cidw_4w4_enqueue(){
    // wp_enqueue_style('style_css', get_stylesheet_uri());
    wp_enqueue_style('cidw-4w4-le-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);
    wp_enqueue_style('cidw-4w4-police-google', "https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@300;400;500&family=Roboto&display=swap", false);
    wp_enqueue_script('cidw-4w4-js-modal', get_template_directory_uri() . '/JS/boite-modale.js', array(), '1.0.0', filemtime(get_template_directory() . '/JS/boite-modale.js'), true);
    wp_enqueue_script('cidw-4w4-js-carrousel', get_template_directory_uri() . '/JS/carrousel.js', array(), '1.0.0', filemtime(get_template_directory() . '/JS/carrousel.js'), true);

    if(is_category('web','cours','design','video','utilitaire','creation-3d','jeu')){
        wp_enqueue_script('cidw-4w4-js-modal');
    }

    if(is_front_page()){
        wp_enqueue_script('cidw-4w4-js-carrousel');
    }
}

add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

// Enregistrement du Menu Principal (voir Header)
function cidw_4w4_register_nav_menu(){
    register_nav_menus( array(
        'menu_principal' => __('Menu Principal', 'cidw_4w4'),
        'menu_footer' => __('Menu Footer', 'cidw_4w4'),
        'menu_categorie_cours' => __('Menu catégorie cours', 'cidw_4w4'),
        'menu_accueil' => __('Menu accueil', 'cidw_4w4'),
        'menu_evenement'=> __('Menu Évènement', 'cidw_4w4'),
        'menu_atelier' => __('Menu Atelier', 'cidw-4w4')
    ) );
}
add_action('after_setup_theme', 'cidw_4w4_register_nav_menu', 0);

//Afficher une description de choix de menu
function prefix_nav_description($item_output, $item){
    if(!empty($item->description)){
        $item_output = str_replace('</a>',
        '<hr><span class="menu-item-description">' . $item->description . '</span><div class="menu-item-icone"></div></a>',
        $item_output);
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'prefix_nav_description', 10, 2 );

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
            'description'   => __( 'Sidebar s\'affichant dans une colonne du footer'),
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
            'description'   => __( 'Sidebar s\'affichant dans une colonne du footer'),
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
            'description'   => __( 'Sidebar s\'affichant dans une colonne du footer'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'header_links',
            'name'          => __( 'Liens sociaux' ),
            'description'   => __( 'Sidebar s\'affichant au dessus de la barre de recherche du header'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}

//Hooks pre-get-post & query-vars
function cidw_4w4_pre_get_posts(WP_Query $query)
{
    //le Hook pre-get-post se manifeste juste avant que la requete wp-query soit executée
    //Ce hook nous permettra d'adapter la requete avant de l'executer

      if (is_admin() 
        || !$query->is_main_query() 
        || !$query->is_category(array('web','cours','design','video','utilitaire','creation-3d','jeu'))) 
        {
            return $query;
        }
        else {
            $ordre = get_query_var('ordre', 'asc');
            $cle = get_query_var('cletri', 'title');
            $query->set('order',  $ordre);
            $query->set('orderby', $cle);
            $query->set('posts_per_page', '-1');
        }
}
add_action('pre_get_posts', 'cidw_4w4_pre_get_posts');

function cidw_4w4_query_vars($params){
    $params[] = "cletri";
    $params[] = "ordre";
    //$params["cletri"] = "title";
    return $params;
}
add_filter('query_vars', 'cidw_4w4_query_vars' );

?>