<?php
function greentech_theme_setup()
{
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'greentech_theme_setup');
// zorgt dat ik een featured image mag meegeven bij een post
function greentech_enqueue_assets()
{
    $uri = get_template_directory_uri();

    wp_enqueue_style('greentech-main', $uri . '/style.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', [], '6.5.1');
    // laadt het css bestand en in import font awesome iconen om te gebruiken in de sidebar

    wp_enqueue_script('jquery'); // Standaard in WordPress
    wp_enqueue_script('greentech-browser', $uri . '/js/browser.min.js', [], null, true);
    wp_enqueue_script('greentech-breakpoints', $uri . '/js/breakpoints.min.js', ['jquery'], null, true);
    wp_enqueue_script('greentech-util', $uri . '/js/util.js', ['jquery', 'greentech-breakpoints'], null, true);
    wp_enqueue_script('greentech-main-js', $uri . '/js/main.js', ['jquery', 'greentech-util'], null, true);
    // importeert alle javascript bestanden om het menu werkend te maken
}

add_action('wp_enqueue_scripts', 'greentech_enqueue_assets');

add_theme_support('custom-logo');
// zorgt dat ik een custom logo kan meegeven in de customizer bij site identity