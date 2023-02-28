<?php 
/**
* category.php est le modèle par défaut pour afficher une archive d'articles de catégorie specifique
*/ 
?>

    <?php get_header(); ?>    

    <main class="site__main">
        <section class="blocflex">
            <?php
                $category = get_queried_object();
                // Permet de definir la nouvelle requête
                $args = array(
                    'category_name' => $category->slug,
                    'orderby' => 'title',
                    'order' => 'ASC'
                );
                // Création d'une nouvelle requête
                $query = new WP_Query( $args );
                // Tout le reste de l'extraction de données est basés sur wp_query 
                // sur la nouvelle requête de contenue dans wp_query
                if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) : $query->the_post(); 
                    $titre = get_the_title();
                    // echo $category->slug;
                    if($category->slug == "cours"){
                        $sigle = substr($titre, 0, 7);
                        $titre_long = substr($titre, 7, -5);// il faut enlever la duree avec un moins
                        $duree = "90";
                        $titre = $sigle;
                    }
                    ?>

                        <article>
                            <h3><a href="<?php the_permalink();?>"><?= $titre; ?></a></h3>
                            <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
                        </article>
                    <?php endwhile; ?>
                <?php endif;
            wp_reset_postdata();?>
        </section>
    </main>

    <?php get_footer(); ?>   

</body>
</html>
