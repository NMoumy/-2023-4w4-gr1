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
      <?php the_content();?>
      <p>Formateur: <?php the_field('formateur'); ?></p>
      <p>Date: <?php the_field('date'); ?></p>     
      <p>Heure: <?php the_field('heure'); ?></p>
      <p>durée: <?php the_field('duree'); ?></p>     
      <p>Local: <?php the_field('local'); ?></p>
    <?php endif;?>
  </main><!-- #main -->
<?php
get_footer();

