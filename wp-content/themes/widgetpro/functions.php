<?php 
    function init_widget($id){
        register_sidebar(array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3 class="sidebar-title font-weight-bold text-danger">',
            'after_title' => '</h3>',
        ));
            register_sidebar(array(
            'name' => 'Showcase',
            'id' => 'showcase',
            'before_widget' => '<div class="showcase">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="showcase-sidebar font-weight-bold text-danger">',
            'after_title' => '</h4>',
        ));
            register_sidebar(array(
            'name' => 'Box 1',
            'id' => 'box1',
            'before_widget' => '<div class="box1">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="box-sidebar font-weight-bold text-danger">',
            'after_title' => '</h4>',
        ));
            register_sidebar(array(
            'name' => 'Box 2',
            'id' => 'box2',
            'before_widget' => '<div class="box2">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="box-sidebar font-weight-bold text-danger">',
            'after_title' => '</h4>',
        ));
            register_sidebar(array(
            'name' => 'Box 3',
            'id' => 'box3',
            'before_widget' => '<div class="box3">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="box-sidebar font-weight-bold text-danger">',
            'after_title' => '</h4>',
        ));
    }
    add_action('widgets_init', 'init_widget');

    
    function featureImage(){
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1000,1000);
    }
    add_action('after_setup_theme','featureImage');

    function nav_menu(){
        register_nav_menus(array(
            'primary'=>__('primary Menu'),
            'footer'=>__('Footer Menu')
        ));
    }
    add_action('after_setup_theme','nav_menu');
?>