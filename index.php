<?php 
/**
* Le fichier modèle index.php est un modèle de secours. Il est utilisé en dernier
* recours lorsqu'aucun autre modèle plus approprié n'est disponible. Par exemple,
* si vous n'avez pas de front-page.php ni de home.php alors index.php sera utilisé.
* Cela est également vrai pour les fichiers archive.php ou single.php manquants, etc.
*/ 
?>

    <?php get_header(); ?>    

        <main>
            <pre>index.php</pre>
            <h1>Tim Maisonneuve</h1>

            <?php 
                if(have_posts()):
                    while(have_posts()):
                        the_post(); // extrait un objet «post» ?>

                        <article>
                            <h3><?php the_title();  // affiche le titre du post ?></h3>
                            <h6>Extrait:</h6><?php the_excerpt(); ?>
                            <h6>Le contenu:</h6><?php the_content();?> 
                        </article>
                        
                    <?php endwhile; ?>
                <?php endif; ?>
        </main>

    <?php get_footer(); ?>   

</body>
</html>