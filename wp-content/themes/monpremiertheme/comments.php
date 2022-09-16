<?php

if (have_comments()) {
    echo "<h5 class='my-5' >" . get_comments_number() . " commentaire(s) pour cet article</h5>";
}
?>
<div class="ms-5">
    <?php wp_list_comments() ?>
</div>