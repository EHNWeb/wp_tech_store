<?php get_header(); ?>
<div class="row">
    <div class="col-md-9">
        <!-- Début de la Boucle. -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <!-- Affiche le Titre en tant que lien vers le Permalien de l'Article. -->
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

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
    <div>
        <div class="div col-md-3 mt-5 text-center">
            <?php dynamic_sidebar('main-side') ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>