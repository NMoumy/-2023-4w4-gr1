<?php 
  /**
  * «template part» gabarit categorie-galerie permet d'afficher la galerie d'un article
  * cet article contient uniquement une galerie
  *
  */
?>
<article class="blocflex__galerie">
    <h4><?php the_field('collection') ?></h4>
    <?php the_content(); ?>
    <p>Photographe : <?php the_field('photographe') ?></p>
    <p>La source des images : <?php the_field('source') ?></p>
    <p>Date de création : <?php the_field('date_de_creation') ?></p>
</article>