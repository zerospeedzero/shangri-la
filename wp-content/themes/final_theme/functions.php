<?php
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script','post-thumbnails', 'post'));
add_theme_support( 'title-tag' );
function linked_assets(){
    wp_enqueue_style('main', get_stylesheet_uri());
    if(is_page()){
        wp_enqueue_style('page-styles', get_template_directory_uri().'/page.css');
    }
    else if(is_single()){
        wp_enqueue_style('single-styles', get_template_directory_uri().'/single.css');
    }
}
add_action('wp_enqueue_scripts', 'linked_assets');
function menu(){
    register_nav_menu('header-menu', 'Main Menu (Header)');
}
add_action('after_setup_theme', 'menu');
function widgets(){
    register_sidebar(array(
        'name'=>'Post Sidebar',
        'id' => 'post-sidebar',
        'before_widget'=>'<div class="widget">',
        'after_widget'=>'</div>',
        'before_title' =>'<h3>',
        'after_title' =>'</h3>'
    ));
    register_sidebar(array(
        'name'=>'Page Sidebar',
        'id' => 'page-sidebar',
        'before_widget'=>'<div class="widget">',
        'after_widget'=>'</div>',
        'before_title' =>'<h3>',
        'after_title' =>'</h3>'
    ));
}
add_action('widgets_init', 'widgets');
add_action('wp_footer', function () {
    wp_dequeue_style('core-block-supports');
});
?>
