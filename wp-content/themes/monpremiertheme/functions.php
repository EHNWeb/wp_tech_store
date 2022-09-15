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
}