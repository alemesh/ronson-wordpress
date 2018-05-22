<?php
if ( ! function_exists( 'ronson_setup' ) ) :

    function ronson_setup() {

        load_theme_textdomain( 'ronson', get_template_directory() . '/languages' );

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails' );

        register_nav_menus( array(
            'menu-1' => esc_html__( 'Primary', 'anc-3f' ),
            'menu-2' => esc_html__( 'Sidebar', 'anc-3f' ),
        ) );

        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        add_theme_support( 'custom-background', apply_filters( 'ronson_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
    }
endif;
add_action( 'after_setup_theme', 'ronson_setup' );

function ronson_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'ronson_content_width', 640 );
}
add_action( 'after_setup_theme', 'ronson_content_width', 0 );

function ronson_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'anc-3f' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'anc-3f' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'ronson_widgets_init' );