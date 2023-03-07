<?php 
/**
 * Template me permettant d'afficher aside.php
 * 
 */
?>

<aside class="site__aside">
  <h3>Menu secondaire</h3>
  <?php
      // fonctionne bien pour une page d'archive «OPTION 1»
      /*$category = get_queried_object();
      if (isset($category)) {
          $menu = $category->slug;
      }
      else {
          $menu = "note-4w4";
      }*/
      $menu = "note-4w4";
      if(in_category('cours')){$menu = "cours";}
      // "menu peut prendre les valeurs : "note-4w4" ou "cours"
      echo $menu;
      wp_nav_menu(array(
                      "menu" => $menu,
                      "container" => "nav",
                      // "container_class" => "menu__aside", //pour changer le nom de la class
      )); 
  ?>
</aside>