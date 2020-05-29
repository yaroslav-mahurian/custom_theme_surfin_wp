<?php

/* Подключение стилей и скриптов */
function surfing_scripts() {
     //Includes stylesheet
    wp_enqueue_style( 
        'surfing-reboot', 
        get_template_directory_uri() . '/libs/bootstrap-reboot/bootstrap-reboot.min.css'
    );

   
    wp_enqueue_style( 'surfing-main', get_stylesheet_uri() );

    wp_enqueue_style( 'surfing-gfonts', 'https://fonts.googleapis.com/css2?family=Fira+Sans:ital@1&family=Playfair+Display:wght@400;700&family=Poppins:wght@300&display=swap' );

    wp_enqueue_style( 
        'surfing-fontSpartan', 
        get_template_directory_uri() . '/fonts/league-spartan/league-spartan.css'
    );

    wp_enqueue_style( 
        'surfing-owlCarousel2', 
        get_template_directory_uri() . '/libs/owlcarousel2/assets/owl.carousel.min.css'
    );

    wp_enqueue_style( 
        'surfing-owlCarousel2Theme', 
        get_template_directory_uri() . '/libs/owlcarousel2/assets/owl.theme.default.min.css'
    );
    

    //Include Scripts


   /*  wp_enqueue_script( 
        'jquery', 
        get_template_directory_uri() . '/libs/jquery/jquery-3.5.1.min.js', 
        array(),'', true 
    ); */

    wp_enqueue_script( 
        'owlCarousel2', 
        get_template_directory_uri() . '/libs/owlcarousel2/owl.carousel.min.js', 
        array('jquery'),'', true 
    );

    wp_enqueue_script( 
        'mainJS', 
        get_template_directory_uri() . '/js/main.js', 
        array('jquery', 'owlCarousel2'),'', true 
    );

    wp_enqueue_script( 
        'header-slider', 
        get_template_directory_uri() . '/js/header-slider.js', 
        array('jquery', 'owlCarousel2'),'', true 
    );

    wp_enqueue_script( 
        'shop-slider', 
        get_template_directory_uri() . '/js/shop-slider.js', 
        array('jquery', 'owlCarousel2'),'', true 
    );

}

add_action( 'wp_enqueue_scripts', 'surfing_scripts' );



/* Регистрация кастомного типа постов с бордами */
add_action('init', 'register_post_types');

function register_post_types(){

    $cptArgsArrayBoards = array(
        'labels'             => array(
            'name'               => 'Борды', // Основное название типа записи
            'singular_name'      => 'Борд', // отдельное название записи типа Book
            'add_new'            => 'Добавить новый',
            'add_new_item'       => 'Добавить новый борд',
            'edit_item'          => 'Редактировать борд',
            'new_item'           => 'Новый борд',
            'view_item'          => 'Посмотреть борд',
            'search_items'       => 'Найти борд',
            'not_found'          =>  'Бордов не найдено',
            'not_found_in_trash' => 'В корзине не найдено ни одного борда',
            'parent_item_colon'  => '',
            'menu_name'          => 'Борды'

            ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array(
                                    'title',
                                    //'editor',
                                    //'author',
                                    'thumbnail',
                                    //'excerpt',
                                    //'comments'
                                )
    );

	register_post_type('boards', $cptArgsArrayBoards );

}

/* Добавление поддержки картинок превью для постов */
    add_theme_support( 'post-thumbnails' );
/* Указание размера картинки для добавления в запись */
if (function_exists('add_image_size')) {
    add_image_size('board-slider', 225, 490, true);
    add_image_size('intro-element-slider', 1016, 572, true);
}



/* Регистрация кастомного типа постов с элементами интро */
add_action('init', 'register_post_types_intro');
function register_post_types_intro(){

    $cptArgsArrayIntro = array(
        'labels'             => array(
            'name'               => 'Элементы интро', // Основное название типа записи
            'singular_name'      => 'Элемент интро', // отдельное название записи типа Book
            'add_new'            => 'Добавить новый',
            'add_new_item'       => 'Добавить новый элемент интро',
            'edit_item'          => 'Редактировать элемент интро',
            'new_item'           => 'Новый элемент интро',
            'view_item'          => 'Посмотреть элемент интро',
            'search_items'       => 'Найти элемент интро',
            'not_found'          =>  'Элементов интро не найдено',
            'not_found_in_trash' => 'В корзине не найдено ни одного элемента интро',
            'parent_item_colon'  => '',
            'menu_name'          => 'Элементы интро'

            ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array(
                                    'title',
                                    //'editor',
                                    //'author',
                                    'thumbnail',
                                    //'excerpt',
                                    //'comments'
                                )
    );

    register_post_type('intro-elements', $cptArgsArrayIntro );
  
}