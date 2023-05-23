<?php 
/**
 * Template me permettant d'afficher aside.php
 * 
 */
?>

<aside class="site__aside">
  <?php the_post_thumbnail('medium') ?>
  <h3 class="<?= is_page_template('template-atelier.php') ? "titre_secondaire" : "" ?>">Menu secondaire</h3>
  <h3 class="<?= is_page_template('template-atelier.php') ? "titre__atelier" : "non__titre__atelier" ?>">Nos atelier en 2023</h3>
  <?php
      $menu = "note-4w4";
      if(in_category('cours')){$menu = "cours";}
      if (is_page_template('template-atelier.php')) {
        $menu = 'ateliers';
      }
      // "menu peut prendre les valeurs : "note-4w4" ou "cours"
      wp_nav_menu(array(
                      "menu" => $menu,
                      "container" => "nav",
                      // "container_class" => "menu__aside", //pour changer le nom de la class
      )); 
    ?>
</aside>
