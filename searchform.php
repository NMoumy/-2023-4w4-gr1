<?php
/* Formulaire de recherche personnalisée */
?>
<!-- <form class="recherche" role="search" method="get"  action="<?php echo esc_url( home_url( '/' ) ); ?>">

  <input type="checkbox" class="check" id="checked">
  <label class="barre__recherche">
    <input class="recherche__input" type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
  </label>
  <label class="btn__recherche" for="checked">
    <span class="recherche__icone"><i class="fa fa-search"></i></span>
  </label>

</form> -->

<form class="recherche" role="search" method="get"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label class="barre__recherche">
    <input class="recherche__input" type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
  </label>
  <button class="btn__recherche" type="submit" class="search-submit">
    <span class="recherche__icone">&#x1F50D;</span>
  </button>
</form>