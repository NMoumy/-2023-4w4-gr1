<?php 
/**
* 404.php est le modèle par défaut du thème 4w4
*/ 
?>
    <?php get_header(); ?>    
        <main class="site__erreur">
            <h1>Erreur 404</h1>
            <h3>Page introuvable</h3>
            <div class="barre__recherche">
                    <?= get_search_form(); ?>
            </div>
        </main>
    <?php get_footer(); ?>   
</body>
</html>