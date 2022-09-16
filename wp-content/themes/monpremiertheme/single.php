<?php get_header(); ?>
<div class="row justify-content-center">
    <div class="col-md-10 shadow p-4 my-5">
        <!-- Début de la Boucle. -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <!-- Affiche le Titre en tant que lien vers le Permalien de l'Article. -->
                <h2 class="titre-page my-5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <?php the_post_thumbnail() ?>

                <!-- Affiche le corps (Content) de l'Article dans un bloc div. -->
                <div class="entry">
                    <?php the_content(); ?>
                </div>

                <!-- Fin de La Boucle (mais notez le "else:" - voir la suite). -->
            <?php endwhile;
        else : ?>

            <!-- Le premier "if" testait l'existence d'Articles à afficher. Cette -->
            <!-- partie "else" indique que faire si ce n'est pas le cas. -->
            <p>Désolé, ce contenu n'existe pas.</p>

            <!-- Fin REELLE de La Boucle. -->
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>