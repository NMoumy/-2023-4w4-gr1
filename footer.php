
<footer class="site__footer">
  <div class="footer__logo">
      <?php the_custom_logo(); ?>
  </div>
  <div> 
    <h4>les cours de cette session</h4> 
    <?php wp_nav_menu(array(
      "menu" => "footer",
      "container" => "nav",
      "container_class" => "menu__footer"
    )); ?>
  </div>
  <div> 
    <h4>les résaux sociaux</h4> 
    <?php wp_nav_menu(array(
      "menu" => "social",
      "container" => "nav",
      "container_class" => "social__media"
    )); ?>
  </div>
</footer>
  <?php wp_footer(); ?>
</body>
</html>