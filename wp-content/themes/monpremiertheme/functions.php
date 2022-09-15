<?php

// add_action est un HOOK, un crochet, qui me permet  de récupérer ce qui a été codé dans widgets_init (fonction_WP) pour le récupérer dans ma fonction utilisateur premiertheme_init_sidebar
add_action('widgets_init', 'premiertheme_init_sidebar');

// J'execute ma fonction utilisateur
function premiertheme_init_sidebar()
{
    // Avec ma fonction utilisateur, j'utilise la fonction prédéfinie register_sidebar
    register_sidebar(
        // je stoke dans un tableau ARRAY
        array(
            'name' => __('haut gauche', 'premiertheme'),
            'id' => ('haut-gauche'),
            'description' => __('Zone en haut à gauche', 'premiertheme')
        )
    );
}