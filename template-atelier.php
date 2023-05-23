<?php
  /**
   * template name: atelier
   */
?>

<?php get_header(); ?>
  <main class="site__main page__atl">
    <?php
    if ( have_posts() ) : the_post(); ?>
      <h5>les ateliers du tim</h5>
      <h1><?= get_the_title(); ?></h1>
      <?php the_content();?>
      <table>
        <tr>
          <td>Formateur</td>
          <td><?php the_field('formateur'); ?></td>
        </tr>
        <tr>
          <td>Date</td>
          <td><?php the_field('date'); ?></td>
        </tr>
        <tr>
          <td>Heure</td>
          <td><?php the_field('heure'); ?></td>
        </tr>
        <tr>
          <td>Durée</td>
          <td><?php the_field('duree'); ?></td>
        </tr>
        <tr>
          <td>Local</td>
          <td><?php the_field('local'); ?></td>
        </tr>
      </table>
    <?php endif;?>
  </main><!-- #main -->
<?php
get_footer();
