<?php
    /**
     * Add theme files
     *
     * @return void
     */
    function add_theme_files() {
        wp_enqueue_style('bootstrap', get_template_directory() . 'css/bootstrap.min.css');
        wp_enqueue_style('blog_css', get_template_directory() . 'css/blog.css');
        wp_enqueue_style('style', get_stylesheet_uri());

        wp_enqueue_script('zm_jquery', get_template_directory() . 'js/jquery-3.4.1.min.js');
        wp_eqnueue_script('boostrap_js', get_template_directory() . 'js/bootstrap.min.js', '', null, true);
    }

    add_action('wp_enqueue_scripts', 'add_theme_files');