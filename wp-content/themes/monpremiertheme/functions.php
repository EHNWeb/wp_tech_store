<?php

// add_action est un HOOK, un crochet, qui me permet  de récupérer ce qui a été codé dans widgets_init (fonction_WP) pour le récupérer dans ma fonction utilisateur premiertheme_init_sidebar
add_action('widgets_init', 'premiertheme_init_sidebar');

// J'execute ma fonction utilisateur
function premiertheme_init_sidebar()
{
    // Avec ma fonction utilisateur, j'utilise la fonction prédéfinie register_sidebar
    register_sidebar(
        // je stoke dans un tableau ARRAY
        // son nom, relié au thème (prmiertheme)
        array(
            'name' => __('haut gauche', 'premiertheme'),
            // son id, si mot composé, pas d'espace, mais snake_case, camelCase ou tiret du 6)
            'id' => ('haut-gauche'),
            // une description, relié au theme (premiertheme)
            'description' => __('Zone en haut à gauche', 'premiertheme')
        )
    );

    register_sidebar(
        array(
            'name' => __('haut droite', 'premiertheme'),
            'id' => ('haut-droite'),
            'description' => __('Zone en haut à droite', 'premiertheme')
        )
    );

    register_sidebar(
        array(
            'name' => __('bas gauche', 'premiertheme'),
            'id' => ('bas-gauche'),
            'description' => __('Zone en bas à gauche', 'premiertheme')
        )
    );

    register_sidebar(
        array(
            'name' => __('bas droite', 'premiertheme'),
            'id' => ('bas-droite'),
            'description' => __('Zone en bas à droite', 'premiertheme')
        )
    );

    register_sidebar(
        array(
            'name' => __('entete', 'premiertheme'),
            'id' => ('entete'),
            'description' => __('Zone entete', 'premiertheme')
        )
    );

    register_sidebar(
        array(
            'name' => __('main side', 'premiertheme'),
            'id' => ('main-side'),
            'description' => __('Zone side bar du main', 'premiertheme')
        )
    );
}

// HOOK qui va récupérer tout le code de INIT, pour l'utiliser ensuite dans ma fonction utilisateur PREMIERTHEME_INIT_MENU
add_action('init', 'premiertheme_init_menu');

// J'execute ma fonction utilisateur
function premiertheme_init_menu()
{
    // j'utilise de init la fonction prédéfinie register_nav_menu pour créer ensuite un menu. Je lui donne en premier argument son id, puis je le relie à mon theme (avec un descriptif dans le back office/apparence/menu -> Primary Menu)
    register_nav_menu('primary', __('Primary Menu', 'premiertheme'));
}

// HOOK qui crochète teh_excerpt et lui donne le nom de excerpt_read_more_link (ma fonction utilisateur)
add_action('the_excerpt', 'excerpt_read_more_link');

// J'execute ma fonction utilisateur en lui donnant un argument
function excerpt_read_more_link($output)
{
    // $spot représente l'article (global pour le récupérer de l'espace global)
    global $post;
    // return permet de stocker (avant de l'utiliser) le contenu de l'argument reçu, en lui concaténant une chaîne de caractères, avec un lien (permalink) qui va pointer vers l'ID
    return $output . "<a href=" .get_permalink($post->ID) . " class='btn btn-outline-primary'>Lire la suite</a>";
}

// HOOK pour crocheter la fonction after_setup_theme, fonstion très globale qui permet des actions de configuration, initialisation, enregistrement pour thème.
add_action('after_setup_theme', 'premiertheme_post_thumbnails');

function premiertheme_post_thumbnails(){
    add_theme_support('post-thumbnails');
}