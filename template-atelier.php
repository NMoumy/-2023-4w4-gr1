<?php
  /**
   * template name: atelier
   */
?>

<?php get_header(); ?>
  <main class="site__main page__evt">
    <?php
    if ( have_posts() ) : the_post(); ?>
      <h1><?= get_the_title(); ?></h1>
      <?php the_post_thumbnail('medium') ?>
      <?php the_content();?>
      <p>L'adresse de l'evénement: <?php the_field('adresse'); ?></p>
      <p>La date et l'heure de l'événement: <?php the_field('date_et_heure_de_levenement'); ?></p>     
    <?php endif;?>
  </main><!-- #main -->
<?php
get_footer();

