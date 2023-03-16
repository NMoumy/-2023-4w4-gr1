<?php 
  /**
  * «template part» gabarit categorie-cours permet d'afficher un article «block»
  * qui s'intégre dans la liste des cours qu'accède avec category/cours
  *
  */
  $titre = get_the_title();
  $sigle = substr($titre, 0, 7);
  $titre = get_the_title();
  if (substr($titre,7, -6) == '(') {
    $titre_long = substr($titre, 7, -6);
  }
  else{
    $titre_long = substr($titre, 7, -5);
  }
  // $titre_long = substr($titre, 7, -5);// il faut enlever la duree avec un moins
  $duree = "90"; //ajouer le titre et le nb d'heure
?>

<article class="blocflex__article">
    <h5><a href="<?php the_permalink(); ?>"> <?= $sigle; ?></a></h5>
    <h6><?= $titre_long; ?></h6>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <h6><?= $duree; ?>h</h6>
</article>