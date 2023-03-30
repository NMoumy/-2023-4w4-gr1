<?php 
/**
* 404.php est le modèle par défaut du thème 4w4
*/ 
?>
    <?php get_header(); ?>    
        <main class="site__erreur">
            
            <h1>Erreur 404</h1>

            <h3>Page introuvable, vous pouvez tenter une recherche</h3>

            <div class="barre__recherche">
                <?= get_search_form(); ?>
            </div>

            <p>Nos choix de cours</p>
            <?php
                $menu = "cours";
                    wp_nav_menu(array(
                                    "menu" => $menu,
                                    "container" => "nav",
                    )); 
            ?>

            <p>Nos notes de cours</p>
            <?php
                $menu = "note-4w4";
                wp_nav_menu(array(
                                "menu" => $menu,
                                "container" => "nav",
                )); 
            ?>

        </main>
    <?php get_footer(); ?>   
</body>
</html>