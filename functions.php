<?php


function add_theme_scripts(){
    // اضافه کردن فایل های css
    wp_enqueue_style('all' , get_template_directory_uri() . '/css/all.css' , array() , false , 'all');
    wp_enqueue_style('owl.carousel' , get_template_directory_uri() . '/css/owl.carousel.min.css' , array() , false , 'all');
    wp_enqueue_style('owl.theme' , get_template_directory_uri() . '/css/owl.theme.default.min.css' , array() , false , 'all');
    wp_enqueue_style('style' , get_stylesheet_uri() , array() , false , 'all');

    //اضافه کردن فایل جاوااسکریپت
    wp_enqueue_script('jq' , get_template_directory_uri() . '/js/jquery-3.5.1.min.js' , array() , false , true);
    wp_enqueue_script('owl.carousel.js' , get_template_directory_uri() . '/js/owl.carousel.min.js' , array('jquery') , false , true);
    wp_enqueue_script('main' , get_template_directory_uri() . '/js/main.js' , array('jquery') , false , true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



function pishro_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');  
    add_image_size('article','313','181',true);
    register_nav_menus(
        array(
            'main-menu' => __( 'جایگاه فهرست اصلی ' ),
            'top-menu' => __( 'جایگاه فهرست بالای سایت' )
        )
    );
}
add_action('after_setup_theme','pishro_setup_theme');


function costum_expert_length(){
    return 20;
}
add_filter('excerpt_length','costum_expert_length',999);



function post_type_pishro_tv()
{
    $labels = array(
        'name'               => __('وبسایت آموزشی'),
        'singular_name'      => __('وبسایت آموزشی'),
        'menu_name'          => __('وبسایت آموزشی'),
        'name_admin_bar'     => __('بسایت آموزشی'),
        'add_new'            => __(' افزودن جدید'),
        'add_new_item'       => __('پست مخصوص ویدیوهای آموزشی'),
        'new_item'           => __('پست جدید'),
        'edit_item'          => __('ویرایش پست'),
        'view_item'          => __('مشاهده پست'),
        'all_items'          => __('همه ویدیوها'),
        'search_items'       => __('جستجو در بین ویدیوها'),
        'parent_item_colon'  => __('مادر'),
        'not_found'          => __('مطلب یافت نشد'),
        'not_found_in_trash' => __('مطلب در زباله دان یافت نشد')
    );
    $args = array(
        'labels'             => $labels,
        'description'        => __('Description.', 'your-plugin-textdomain'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,

        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'taxonomies' => array('post_tag'),
        //'taxonomies' => array('post_tag'),
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );
    register_post_type('tv', $args);
}
add_action('init', 'post_type_pishro_tv');
