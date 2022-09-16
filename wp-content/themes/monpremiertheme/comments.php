<?php

// Permet de récupérer en bas de lárticle, le nombre de commentaires liées s'il y en a
if (have_comments()) {
    echo "<h5 class='my-5' >" . get_comments_number() . " commentaire(s) pour cet article</h5>";
}
?>
<div class="ms-5">
    <!-- Fonction p'redéfinie qui récupère tous les commentaires liés à l'article -->
    <?php wp_list_comments() ?>
</div>