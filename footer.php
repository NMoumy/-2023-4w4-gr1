<footer class="site__footer">
  <section class="information">
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
  </section>
  
  <section class="widget">
    <div class="footer__col">
      <div class="sidebar">
        <?php dynamic_sidebar( 'footer_1' ); ?>
      </div>
    </div>
    <div class="footer__col">
      <div class="sidebar">
        <?php dynamic_sidebar( 'footer_2' ); ?>
      </div>
    </div>
    <div class="footer__col">
      <div class="sidebar">
        <?php dynamic_sidebar( 'footer_3' ); ?>
      </div>
    </div>
  </section>

</footer>
  <?php wp_footer(); ?>
</body>
</html>