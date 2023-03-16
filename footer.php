
<footer class="site__footer">
  <div class="footer__logo">
      <?php the_custom_logo(); ?>
  </div>
  <?php wp_nav_menu(array(
    "menu" => "footer",
    "container" => "nav",
    "container_class" => "menu__footer"
  )); ?>
  <?php wp_nav_menu(array(
    "menu" => "social",
    "container" => "nav",
    "container_class" => "social__media"
  )); ?>
 <!-- <a href= "https://cidweb37.sg-host.com/"  title= "lien wordpress" >Lien wordpress</a>  -->
</footer>
  <?php wp_footer(); ?>
</body>
</html>