<?php

function register_menu() {
    register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
  }
// 登録済みのjQueryを解除して、登録し直す
function remove_default_jquery()
{
    // 管理画面でないなら
    if (!is_admin()) {
        wp_deregister_script('jquery');
        add_action( 'after_setup_theme', 'register_menu' );

        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), 3.2, true);
        wp_enqueue_script('popper_js', get_template_directory_uri() . '/styles/bootstrap4/popper.js', array(), 4.0, true);
        wp_enqueue_script('bootstrap4_js', get_template_directory_uri() . '/styles/bootstrap4/bootstrap.min.js', array(), 4.0, true);
    }
}


add_action('wp_enqueue_scripts', 'remove_default_jquery');
add_theme_support('post-thumbnails');