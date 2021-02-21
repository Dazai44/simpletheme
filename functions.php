<?php 
//подключение класса (плагина) ACF
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'includes\carbon-fields\vendor\autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

//что бы не засорять functions код разбит на файлы и этот скрипт их подключает
add_action('carbon_fields_register_fields', 'register_carbon_fileds');
function register_carbon_fileds(){
    require_once('includes/carbon-options/theme-option.php');
    require_once('includes/carbon-options/meta-post.php');
}

//отключить админ панель
show_admin_bar( false );
//подключение всего что нужно
add_action('wp_enqueue_scripts', 'require_scripts');
function require_scripts(){
    $ver ='0.0.0.0';
    //удаление ненужного
    wp_deregister_script('wp-embed');
    //подключение стилей
    wp_enqueue_style('style-css', get_template_directory_uri() . '/css/style.css', [], $ver);
    wp_enqueue_style('vendor-css', get_template_directory_uri(). '/css/vendor.css', [], $ver);
    wp_enqueue_style('base-css', get_template_directory_uri(). '/css/base.css', [], '');
    //подключение скриптов
    wp_enqueue_script('modernizr-js', get_template_directory_uri() . '/js/modernizr.js', [], '', true);
    wp_enqueue_script('jq-js', get_template_directory_uri() . '/js/jquery-1.11.3.min.js', [], '', true);
    wp_enqueue_script('jq-min-js', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js', [], '', true);
    wp_enqueue_script('plugins-js', get_template_directory_uri() . '/js/plugins.js', [], '', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', [], '', true);
}
//удаление множества ненужных скриптов и тд 
remove_action('wp-head', 'wp_resource-hints', 2);
remove_action('wp-head', 'wp_generator');
remove_action('wp-head', 'wplmanifest_link');
remove_action('wp-head', 'rsd_link');
remove_action('wp-head', 'rest_output_link_wp_head');
remove_action('wp-head', 'rel_canonical');
remove_action('wp-head', 'wp_shortlink_wp_head',10 );
remove_action('wp-head', 'wp_oembed_add_discovery_links');

add_action('after_setup_theme', 'theme_support');
function theme_support() {
    register_nav_menu( 'menu_main_header', 'Меню в шапке');
    add_theme_support('post-thumbnails');
}


