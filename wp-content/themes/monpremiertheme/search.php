<?php get_header() ?>

<div class="row justify-content-center">
    <div class="col-md-10 shadow my-5">
        <?php printf(__("<h2 class='my-y'>Résultat de la recherche sur le(s) mot(s) %s </h2>"), get_search_query()) ?>
        <!-- get_search_query récupère de la BDD tout ce qui conserne les mots clés -->

        <!-- Début de la Boucle. -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <!-- Affiche le Titre en tant que lien vers le Permalien de l'Article. -->
                <h2 class="titre-page mt-5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <?php the_post_thumbnail() ?>

                <p class="text-end text-primary">
                    <small>Publié le <?php the_time('d/m/Y') ?> par <?php the_author() ?></small>
                </p>
                <!-- Affiche le corps (Content) de l'Article dans un bloc div. -->
                <div class="entry">
                    <?php the_excerpt(); ?>
                </div>

                <!-- Fin de La Boucle (mais notez le "else:" - voir la suite). -->
            <?php endwhile;
        else : ?>

            <!-- Le premier "if" testait l'existence d'Articles à afficher. Cette -->
            <!-- partie "else" indique que faire si ce n'est pas le cas. -->
            <p>Malheureusement, aucun contenu ne correspond à votre recherche !</p>

            <!-- Fin REELLE de La Boucle. -->
        <?php endif; ?>
    </div>
</div>

<?php get_footer() ?>