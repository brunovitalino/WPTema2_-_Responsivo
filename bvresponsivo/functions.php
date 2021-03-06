<?php 

/**************************************
 *  THEME SUPORT
 **************************************/
function add_suport_theme(){
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme','add_suport_theme' );

/**************************************
 *  SCRIPTS / CSS de Bootstrap
 **************************************/
function wp_responsivo_scripts() {
  // Carregando CSS header
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  
  // Carregando Scripts header
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery') );

  //Carregando no footer
  //wp_enqueue_script('functions-js', get_template_directory_uri().'/assets/js/functions.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'wp_responsivo_scripts' );

/**************************************
 * Registro de Custom Post do tipo Slider
 **************************************/
add_action( 'init', 'slider_register' );
function slider_register(){
     $labels = array(
        'name' => _x( 'Slider', 'post type general name' ),
        'singular_name' => _x( 'Slider', 'post type singular name' ),
        'add_new' => _x( 'Adicionar slider', 'slider' ),
        'add_new_item' => __( 'Adicionar slider' ),
        'edit_item' => __( 'Editar slider' ),
        'new_item' => __( 'Novo slider' ),
        'view_item' => __( 'Ver slider' ),
        'search_items' => __( 'Procurar slider' ),
        'not_found' =>  __( 'Nada encontrado' ),
        'not_found_in_trash' => __( 'Nada encontrado no lixo' ),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-code',
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 6,
        'supports' => array('title','thumbnail') //Campos que são habilitados durante a postagem
    );
    register_post_type( 'slider', $args );
}

/**************************************
 * Registro de Custom Menu
 **************************************/
add_theme_support( 'menus' );

// Register Custom Navigation Walker
require_once( 'assets/includes/wp-bootstrap-navwalker.php' );
// Declaracao do novo menu: Custom Navigation Walker
register_nav_menus(
  array(
    'primary' => __('Menu header', 'menu-header')
  )
);

/**************************************
 * Registro de Custom Post do tipo Serviços
 **************************************/
add_action( 'init', 'servicos_register' );
function servicos_register(){
     $labels = array(
        'name' => _x( 'Serviços', 'post type general name' ),
        'singular_name' => _x( 'Serviços', 'post type singular name' ),
        'add_new' => _x( 'Adicionar serviço', 'slider' ),
        'add_new_item' => __( 'Adicionar serviço' ),
        'edit_item' => __( 'Editar serviço' ),
        'new_item' => __( 'Novo serviço' ),
        'view_item' => __( 'Ver serviço' ),
        'search_items' => __( 'Procurar serviço' ),
        'not_found' =>  __( 'Nada encontrado' ),
        'not_found_in_trash' => __( 'Nada encontrado no lixo' ),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-hammer',
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'servicos'),
        'menu_position' => 6,
        'supports' => array('title', 'editor', 'thumbnail') //Campos que são habilitados durante a postagem
    );
    register_post_type( 'servicos', $args );
}